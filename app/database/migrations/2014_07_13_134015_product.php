<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Product extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('items', function($table) {
			$table->increments('id');
			$table->string('nama');
			$table->string('kode');
			$table->string('deskripsi');
			$table->string('harga');
			$table->string('kategori');
			$table->string('img');
			$table->string('img_thumb');
			$table->string('public_path');
			$table->string('public_path_thumb');
			$table->string('updated_at');
			$table->integer('urutan');

			// $table->timestamps();

		}


			);
		Schema::create('featured', function($table) {
			$table->increments('id');
			$table->string('nama');
			$table->string('kode');
			$table->string('deskripsi');
			$table->string('harga');
			$table->string('kategori');
			$table->string('img');
			$table->string('img-thumb');
			$table->integer('urutan');
			// $table->timestamps();

		}


			);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('items');
	}

}
