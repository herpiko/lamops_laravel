<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{

	$item = Items::orderby('id','DESC')->get();
	// print $item;
	
	return View::make('main')->with('item',$item);
});


Route::get('login', function() {
	// $error='';
	return View::make('login')->with('error','');
});

Route::get('changepass', function() {
	// $error='';
	return View::make('changepass')->with('error','');
});

Route::post('changepass', function(){

	// $current_user = Auth::email();
	$email = Input::get('email');
	$password = Input::get('password');
	$new_password = Input::get('new_password');
	$new_password_confirm = Input::get('new_password_confirm');

	if ($new_password == $new_password_confirm) {

		if (Auth::attempt(array('email' => $email, 'password' => $password)))
		{
			$user = User::findOrFail(Auth::user()->id);
			$user->password = Hash::make($new_password);
			$user->save();
			return View::make('message')->with('error','Kata kunci berhasil diganti.');
		} else {
			return View::make('changepass')->with('error','Kata kunci salah.');	
		}
		
	} else {
		return View::make('changepass')->with('error','Kata kunci baru tidak sama.');
	}
	
});

Route::post('login', function(){
	if(Auth::attempt(Input::only('username','password'))){
		return Redirect::intended('/');
	} else {
		return View::make('login')->with('error',"Nama akun atau password salah.");
	}
});

Route::get('logout', function(){
Auth::logout();
return Redirect::to('/')
->with('message', 'You are now logged out');
});	

Route::get('admin',function(){
	
	if (Auth::check()) {
		return View::make('admingreeter');
	} else {
		return Redirect::to('/');
	}
	
});
Route::post('produk', function(){
	if (Auth::check()) {
		$nama = Input::get('nama');
		$deskripsi = Input::get('deskripsi');
		$harga = Input::get('harga');
		$id = Input::get('id');
		$mode = Input::get('mode');

		

		$hash_nama_long = Hash::make($nama.$deskripsi.$harga);
		$hash_nama = substr($hash_nama_long, 0, 10);
		$destination = public_path().'/img/item/';
		$destination_thumb = public_path().'/img/item/thumb/';
		if (Input::hasFile('image')) {
		    $file = Input::file('image');
		    $filename = $file->getClientOriginalName();
		    $hash_filename_long = Hash::make($filename);
		    $hash_filename = substr($hash_filename_long, 0, 10);
		    $nama_underscore = str_replace(' ', '_', $nama);
		    $filename = $nama_underscore."-".$hash_nama."-".$hash_filename.".jpg";
		    $filename = str_replace('/', '', $filename);
		    $filename = str_replace('$', '', $filename);


		    $thumb = Image::make($file)->resize(180,180);
		    $thumb->save($destination_thumb.$filename);
			$img = Image::make($file)->resize(500,500);
		    $img->save($destination.$filename);
		    $thumb_path = "/img/item/thumb/".$filename;
		    $img_path = "/img/item/".$filename;
		    $public_path = $destination.$filename;
		    $public_path_thumb = $destination_thumb.$filename;
		    $img = 'img/item/'.$filename;
		} else {
			$img_path="";
			$thumb_path="";
			$public_path="";
			$public_path_thumb="";
		}
		

		switch ($mode) {
			case 'insert':
				Items::insert(array(
					array(
							'nama'=>$nama,
							'kode'=>'',
							'deskripsi'=>$deskripsi,
							'harga'=>$harga,
							'kategori'=>'1',
							'img'=>$img_path,
							'img_thumb'=>$thumb_path,
							'updated_at'=>'',
							'public_path'=>$public_path,
							'public_path_thumb'=>$public_path_thumb,
							'urutan'=>1,
						),
					));
				return Redirect::intended('/produk');
			case 'update':
				$item = Items::find($id);
				
				$item->nama = $nama;
				$item->kode = '';
				$item->deskripsi = $deskripsi;
				$item->harga = $harga;
				$item->kategori = '';
				
				if ($img_path) {
				$item->img = $img_path;
				}
				if ($thumb_path) {
				$item->img_thumb = $thumb_path;
				}
				if ($public_path) {
				$item->public_path = $public_path;
				}
				if ($public_path_thumb) {
				$item->public_path_thumb = $public_path_thumb;
				}
				
			
				$item->save();
				return Redirect::intended('/produk');
				
			
			// default:
			// 	# code...
			// 	break;
		}

		

	} else {
		return Redirect::back()->withInput()->with('error',"Invalid credentials");
	}
});




Route::get('produk',function(){
	if (Auth::check()) {
		$item = Items::orderby('id','DESC')->get();
		return View::make('produk')->with('item',$item);
	} else {

		return Redirect::to('/');
	}
	
});

Route::get('hapus-produk',function(){
	if (Auth::check()) {
		$id = Input::get('id');
		$item = Items::find($id);
		// echo $item['public_path'];
		File::delete($item['public_path']);
		File::delete($item['public_path_thumb']);
		Items::find($id)->delete();
		// echo $path;
		
		return Redirect::to('/produk');
	} else {

		return Redirect::to('/');
	}
	
});