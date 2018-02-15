<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlantationTable extends Migration {

	public function up()
	{
		Schema::create('plantation', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('numplantation', 255)->nullable();
			$table->integer('idville')->nullable();
			$table->string('sousvillage', 255)->nullable();
			$table->string('zoneplantation', 255)->nullable();
			$table->smallInteger('nombreparcelle')->nullable();
			$table->integer('Superficie_estime')->nullable();
			$table->integer('Superficiecartographie')->nullable();
			$table->integer('distance_Plantation_Village')->nullable();
			$table->smallInteger('Age_Plantation')->nullable();
			$table->string('PeriodeControle', 100)->nullable();
			$table->string('Superficie_estime1')->nullable();
			$table->smallInteger('Nombre_Plants_distribues')->nullable();
			$table->integer('Superficie_totale_estime')->nullable();
			$table->smallInteger('Cumul_Plants_distribues')->nullable();
			$table->integer('id_planteur')->unsigned()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('plantation');
	}
}