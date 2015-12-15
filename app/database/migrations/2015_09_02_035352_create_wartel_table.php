<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWartelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	Schema::create('wartel', function(Blueprint $table) {
			$table->increments('id');
			$table->string('kecamatan');
			$table->string('nama_wartel');
			$table->integer('jumlah_kbu');
			$table->string('pemilik');
			$table->string('alamat');
			$table->integer('telepon');
			$table->string('keterangan');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('wartel');
	}

}
