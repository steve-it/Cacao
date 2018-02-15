<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVilleTable extends Migration {

	public function up()
	{
		Schema::create('ville', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('nomville', 255);
			$table->integer('id_departement')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('ville');
	}
}