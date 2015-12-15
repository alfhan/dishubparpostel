<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTowerBtsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	Schema::create('tower_bts', function(Blueprint $table) {
			$table->increments('id');
			$table->string('zona');
			$table->string('desa');
			$table->integer('jumlah_perusahaan');
			$table->string('nama_perusahaan');
			$table->string('alamat_perusahaan');
			$table->string('lokasi');
			$table->string('kordinat');
			$table->string('tinggi_menara');
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
		Schema::drop('tower_bts');
	}

}
