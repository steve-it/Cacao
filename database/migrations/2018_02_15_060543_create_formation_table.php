<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFormationTable extends Migration {

	public function up()
	{
		Schema::create('formation', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('Numformation', 50)->nullable();
			$table->string('libelle', 255)->nullable();
			$table->string('zone', 255)->nullable();
			$table->string('souszone', 255)->nullable();
			$table->date('Datecreation')->nullable();
			$table->string('TypeFormation', 255)->nullable();
			$table->string('NumChampDeroulerFormation', 100)->nullable();
			$table->string('theme', 255)->nullable();
			$table->string('dirigepar', 255)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('formation');
	}
}