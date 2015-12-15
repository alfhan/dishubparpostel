<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembayaranTowerBtsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	Schema::create('pembayaran_tower_bts', function(Blueprint $table) {
			$table->increments('id_pembayaran');
			$table->integer('id_tower');
			$table->integer('tahun');
			$table->string('status');
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
		Schema::drop('pembayaran_tower_bts');
	}

}
