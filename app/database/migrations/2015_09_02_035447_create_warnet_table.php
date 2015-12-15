<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWarnetTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	Schema::create('warnet', function(Blueprint $table) {
			$table->increments('id');
			$table->string('kecamatan');
			$table->string('nama_warnet');
			$table->string('type');
			$table->integer('jumlah_komputer');
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
		Schema::drop('warnet');
	}

}
