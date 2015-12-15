<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelevisiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	Schema::create('televisi', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nama_perusahaan');
			$table->string('pemilik');
			$table->string('alamat_perusahaan');
			$table->integer('dibangun_tahun');
			$table->string('no_simb');
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
		Schema::drop('televisi');
	}

}
