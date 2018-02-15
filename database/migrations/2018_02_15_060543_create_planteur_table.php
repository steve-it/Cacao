<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlanteurTable extends Migration {

	public function up()
	{
		Schema::create('planteur', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('Nom_Prenom', 255);
			$table->string('Contact_Communaute', 255)->nullable();
			$table->integer('Age')->nullable();
			$table->string('sexe', 15)->nullable();
			$table->string('Nombre_conjoints')->nullable();
			$table->integer('Nombre_enfants_filles')->nullable();
			$table->integer('Nombre_enfants_garcons')->nullable();
			$table->integer('Taille_menage')->nullable();
			$table->string('NumAutorisationExploitation', 50)->nullable();
			$table->string('type_contrat', 50)->nullable();
			$table->string('status', 100)->nullable();
			$table->string('fonction', 100)->nullable();
			$table->string('Nationalite', 50)->nullable();
			$table->string('Situation_Matrimoniale', 100)->nullable();
			$table->integer('Nombre_Plantations')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('planteur');
	}
}