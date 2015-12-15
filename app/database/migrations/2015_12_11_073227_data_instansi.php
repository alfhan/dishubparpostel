<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DataInstansi extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('data_instansi', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('kabkota_id');
			$table->string('nama_instansi');
			$table->string('kepala_dinas');
			$table->string('nip_kepala_dinas');
			$table->integer('is_kepala_dinas');
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
		Schema::drop('data_instansi');
	}

}
