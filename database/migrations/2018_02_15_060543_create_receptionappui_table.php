<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReceptionappuiTable extends Migration {

	public function up()
	{
		Schema::create('receptionappui', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('id_appuis')->unsigned()->nullable();
			$table->integer('id_planteur')->unsigned()->nullable();
			$table->date('datereception')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('receptionappui');
	}
}