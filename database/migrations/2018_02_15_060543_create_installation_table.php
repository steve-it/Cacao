<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInstallationTable extends Migration {

	public function up()
	{
		Schema::create('installation', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('id_plantation')->nullable();
			$table->date('dateinstallation')->nullable();
			$table->tinyInteger('Foret')->nullable();
			$table->integer('Delimitation')->nullable();
			$table->integer('Defrichage')->nullable();
			$table->integer('Abattagesous-bois')->nullable();
			$table->integer('Abattageselectif')->nullable();
			$table->integer('TronconnageAndainage')->nullable();
			$table->integer('Piquetage')->nullable();
			$table->integer('Trouaisoncacaoyers')->nullable();
			$table->integer('Plantingcacaoyers')->nullable();
			$table->integer('Trouaisonbananiers')->nullable();
			$table->integer('Plantingbananiers')->nullable();
			$table->integer('NombrePlantsCacaoyers')->nullable();
			$table->integer('NombrePlantsBananiers')->nullable();
			$table->integer('NombrePlantsSafoutiers')->nullable();
			$table->integer('NombrePlantsAvocatiers')->nullable();
			$table->integer('NombrePlantsGoyaviers')->nullable();
			$table->integer('NombrePlantsPapayers')->nullable();
			$table->integer('NombrePlantsManguiers')->nullable();
			$table->integer('NombrePlants')->nullable();
			$table->integer('CocotiersNombrePlantsAgrumes')->nullable();
			$table->integer('NombrePlantsPalmiershuile')->nullable();
			$table->integer('NombrePlantsColatiers')->nullable();
			$table->integer('EcartementAgrumes')->nullable();
			$table->integer('EcartementPalmiershuile')->nullable();
			$table->integer('EcartementCocotiers')->nullable();
			$table->integer('EcartementManguiers')->nullable();
			$table->integer('EcartementPapayers')->nullable();
			$table->integer('EcartementGoyaviers')->nullable();
			$table->integer('EcartementCacaoyers')->nullable();
			$table->integer('EcartementBananiers')->nullable();
			$table->integer('EcartementColatiers')->nullable();
			$table->integer('EcartementSafoutiers')->nullable();
			$table->integer('EcartementAvocatiers')->nullable();
			$table->integer('OrigineCacaoyers')->nullable();
			$table->string('OrigineBananiers', 100)->nullable();
			$table->string('OrigineSafoutiers', 100)->nullable();
			$table->string('OrigineAvocatiers', 100)->nullable();
			$table->string('OrigineColatiers', 100)->nullable();
			$table->string('OrigineAgrumes', 100)->nullable();
			$table->string('OriginePalmiershuile', 100)->nullable();
			$table->string('OriginePapayers', 100)->nullable();
			$table->string('OrigineCocotiers', 100)->nullable();
			$table->string('OrigineManguiers', 100)->nullable();
			$table->string('OrigineGoyaviers', 100)->nullable();
			$table->text('Observations')->nullable();
			$table->text('Recommandations')->nullable();
			$table->string('Numfiche', 255)->nullable();
			$table->integer('idpersonnel')->unsigned()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('installation');
	}
}