<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAppuisTable extends Migration {

	public function up()
	{
		Schema::create('appuis', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('id_planteur')->unsigned()->nullable();
			$table->date('Annee_Financement')->nullable();
			$table->string('Source_Financement1', 255)->nullable();
			$table->string('Source_Financement2', 255)->nullable();
			$table->integer('MontantFinancement')->nullable();
			$table->string('TypeFinancement', 255)->nullable();
			$table->string('EtatRemboursementCredit', 100)->nullable();
			$table->date('AnneeReceptionMateriel')->nullable();
			$table->date('AnneeFormation')->nullable();
			$table->string('SourceFinancement3', 255)->nullable();
			$table->string('Modules', 50)->nullable();
			$table->string('lieu', 50)->nullable();
			$table->tinyInteger('Machettes')->nullable();
			$table->smallInteger('Limes')->nullable();
			$table->tinyInteger('Secateurs')->nullable();
			$table->smallInteger('Pulverisateurs')->nullable();
			$table->smallInteger('Scies')->nullable();
			$table->string('Insecticides', 50)->nullable();
			$table->string('Fongicide', 50)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('appuis');
	}
}