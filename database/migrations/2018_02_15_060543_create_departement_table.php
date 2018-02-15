<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDepartementTable extends Migration {

	public function up()
	{
		Schema::create('departement', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('nomdepartement', 255);
		});
	}

	public function down()
	{
		Schema::drop('departement');
	}
}