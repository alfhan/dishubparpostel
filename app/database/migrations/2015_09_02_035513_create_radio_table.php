<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRadioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	Schema::create('radio', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nama_radio');
			$table->string('frekuensi');
			$table->string('penanggung_jawab');
			$table->string('alamat');
			$table->integer('telepon');
			$table->date('tgl_proposal');
			$table->string('atas_nama');
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
		Schema::drop('radio');
	}

}
