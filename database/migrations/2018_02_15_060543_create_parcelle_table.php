<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParcelleTable extends Migration {

	public function up()
	{
		Schema::create('parcelle', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('NumParcelle', 100)->nullable();
			$table->tinyInteger('ageparcelle')->nullable();
			$table->string('Superficie_estime')->nullable();
			$table->integer('Superficie_cartographie')->nullable();
			$table->date('Date_culture')->nullable();
			$table->integer('id_plantation')->unsigned()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('parcelle');
	}
}