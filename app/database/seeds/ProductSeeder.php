<?php

class ProductSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('items')->insert(array(
			array(
					'nama'=>'Kura-kura',
					'kode'=>'4DS22',
					'deskripsi'=>'Berbahan dasar kerang mutiara (bagian tebal)',
					'harga'=>'Rp. 250.000',
					'kategori'=>'1',
					'img'=>'img/item/1.jpg',
					'img_thumb'=>'img/item/thumb1.jpg',
					'public_path'=>'',
					'public_path_thumb'=>'',
					'updated_at'=>'',
					'urutan'=>1,
				),
	
			
			
			));

		// $this->call('UserTableSeeder');
	}

}

