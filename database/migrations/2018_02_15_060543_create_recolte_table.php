<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRecolteTable extends Migration {

	public function up()
	{
		Schema::create('recolte', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('id_plantation')->nullable();
			$table->date('daterecolte')->nullable();
			$table->date('Dateecabossage')->nullable();
			$table->mediumInteger('Dispositiffermentation')->nullable();
			$table->mediumInteger('Nombrejoursfermentation')->nullable();
			$table->mediumInteger('Nombrebrassages')->nullable();
			$table->mediumInteger('Dispositifsechage')->nullable();
			$table->mediumInteger('Nombrejourssechage')->nullable();
			$table->string('Typeembalage', 100)->nullable();
			$table->smallInteger('Dureestockage')->nullable();
			$table->mediumInteger('Nombresacsproduits')->nullable();
			$table->mediumInteger('Poidsphysiqueproduit')->nullable();
			$table->string('Lieustockage', 50)->nullable();
			$table->date('Dateachat')->nullable();
			$table->integer('Poidsachete')->nullable();
			$table->string('Qualiteproduit', 100)->nullable();
			$table->text('Observations')->nullable();
			$table->text('Recommandations')->nullable();
			$table->string('Numfiche')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('recolte');
	}
}