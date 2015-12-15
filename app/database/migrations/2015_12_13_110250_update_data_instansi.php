<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateDataInstansi extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('data_instansi', function ($table) {
            $table->string('kepala_satu')->default(null);
            $table->string('nip_kepala_satu')->default(null);
            $table->integer('is_kepala_satu')->default(1);
            $table->string('kepala_dua')->default(null);
            $table->string('nip_kepala_dua')->default(null);
            $table->integer('is_kepala_dua')->default(1);
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
