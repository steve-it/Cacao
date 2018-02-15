<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParticipationformationTable extends Migration {

	public function up()
	{
		Schema::create('participationformation', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('id_planteur')->unsigned()->nullable();
			$table->integer('id_formation')->unsigned()->nullable();
			$table->date('dateparticipation')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('participationformation');
	}
}