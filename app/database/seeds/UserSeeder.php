<?php

class UserSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->insert(array(
			array(
					'username'=>'admin',
					'email' => 'herpiko@gmail.com',
					'password'=>Hash::make('admin'),
					'is_admin'=>true,
					'updated_at'=>'',
					'remember_token'=>'',
				
				),
			
			));

		// $this->call('UserTableSeeder');
	}

}

