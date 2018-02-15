<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonnelTable extends Migration {

	public function up()
	{
		Schema::create('personnel', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('Matricule')->nullable();
			$table->string('Nom_prenom', 255)->nullable();
			$table->string('fonction', 255)->nullable();
			$table->string('sexe', 50)->nullable();
			$table->string('telephone1', 50)->nullable();
			$table->string('telephone2', 50)->nullable();
			$table->string('email', 100)->nullable();
			$table->string('numerocase', 50)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('personnel');
	}
}