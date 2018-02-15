<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('ville', function(Blueprint $table) {
			$table->foreign('id_departement')->references('id')->on('departement')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('parcelle', function(Blueprint $table) {
			$table->foreign('id_plantation')->references('id')->on('plantation')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('conduite', function(Blueprint $table) {
			$table->foreign('id_plantation')->references('id')->on('plantation')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('conduite', function(Blueprint $table) {
			$table->foreign('idpesrsonnel')->references('id')->on('personnel')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('plantation', function(Blueprint $table) {
			$table->foreign('id_planteur')->references('id')->on('planteur')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('appuis', function(Blueprint $table) {
			$table->foreign('id_planteur')->references('id')->on('planteur')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('installation', function(Blueprint $table) {
			$table->foreign('idpersonnel')->references('id')->on('personnel')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('participationformation', function(Blueprint $table) {
			$table->foreign('id_planteur')->references('id')->on('planteur')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('participationformation', function(Blueprint $table) {
			$table->foreign('id_formation')->references('id')->on('formation')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('receptionappui', function(Blueprint $table) {
			$table->foreign('id_appuis')->references('id')->on('appuis')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('receptionappui', function(Blueprint $table) {
			$table->foreign('id_planteur')->references('id')->on('planteur')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('ville', function(Blueprint $table) {
			$table->dropForeign('ville_id_departement_foreign');
		});
		Schema::table('parcelle', function(Blueprint $table) {
			$table->dropForeign('parcelle_id_plantation_foreign');
		});
		Schema::table('conduite', function(Blueprint $table) {
			$table->dropForeign('conduite_id_plantation_foreign');
		});
		Schema::table('conduite', function(Blueprint $table) {
			$table->dropForeign('conduite_idpesrsonnel_foreign');
		});
		Schema::table('plantation', function(Blueprint $table) {
			$table->dropForeign('plantation_id_planteur_foreign');
		});
		Schema::table('appuis', function(Blueprint $table) {
			$table->dropForeign('appuis_id_planteur_foreign');
		});
		Schema::table('installation', function(Blueprint $table) {
			$table->dropForeign('installation_idpersonnel_foreign');
		});
		Schema::table('participationformation', function(Blueprint $table) {
			$table->dropForeign('participationformation_id_planteur_foreign');
		});
		Schema::table('participationformation', function(Blueprint $table) {
			$table->dropForeign('participationformation_id_formation_foreign');
		});
		Schema::table('receptionappui', function(Blueprint $table) {
			$table->dropForeign('receptionappui_id_appuis_foreign');
		});
		Schema::table('receptionappui', function(Blueprint $table) {
			$table->dropForeign('receptionappui_id_planteur_foreign');
		});
	}
}