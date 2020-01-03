<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEtudiantsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('etudiants', function(Blueprint $table)
		{
			$table->string('Matricule', 10)->index('Matricule');
			$table->string('NomEtud', 50)->nullable();
			$table->string('Prenoms', 50)->nullable();
			$table->string('NomUser', 200)->nullable();
			$table->string('password', 200)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('etudiants');
	}

}
