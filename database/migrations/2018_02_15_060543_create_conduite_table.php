<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConduiteTable extends Migration {

	public function up()
	{
		Schema::create('conduite', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('id_plantation')->unsigned()->nullable();
			$table->date('dateconduite')->nullable();
			$table->smallInteger('Nombre_Cacaoyers')->nullable();
			$table->smallInteger('NombreBananiers')->nullable();
			$table->smallInteger('NombreSafoutiers')->nullable();
			$table->smallInteger('NombreAvocatiers')->nullable();
			$table->smallInteger('NombreManguiers')->nullable();
			$table->smallInteger('NombreCocotiers')->nullable();
			$table->smallInteger('NombreAgrumes')->nullable();
			$table->smallInteger('NombreGoyaviers')->nullable();
			$table->smallInteger('NombrePapayers')->nullable();
			$table->smallInteger('NombreColatiers')->nullable();
			$table->smallInteger('NombrePlantsMorts')->nullable();
			$table->smallInteger('NombrePlantsremplaces')->nullable();
			$table->smallInteger('NombrePlantsnon-remplaces')->nullable();
			$table->smallInteger('Remplacementmanquants')->nullable();
			$table->smallInteger('Egourmandage')->nullable();
			$table->smallInteger('Tailles')->nullable();
			$table->string('Recoltesanitaire')->nullable();
			$table->string('Presenceattaqueinsectes')->nullable();
			$table->tinyInteger('Presencepourriturebrune')->nullable();
			$table->tinyInteger('Traitementinsecticide')->nullable();
			$table->tinyInteger('Traitementfongicide')->nullable();
			$table->string('Produitquantiteutilise')->nullable();
			$table->date('Anneeregeneration')->nullable();
			$table->string('Typeregeneration', 100)->nullable();
			$table->mediumInteger('Nombreplantsregeneressemence')->nullable();
			$table->integer('superficiecorrespondante')->nullable();
			$table->string('Originesplantssemence', 100)->nullable();
			$table->string('Varietes', 100)->nullable();
			$table->integer('idpesrsonnel')->unsigned()->nullable();
			$table->text('observations')->nullable();
			$table->text('recommandations')->nullable();
			$table->string('NumFiche', 255)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('conduite');
	}
}