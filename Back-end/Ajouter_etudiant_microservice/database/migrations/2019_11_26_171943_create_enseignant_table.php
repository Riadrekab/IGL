<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnseignantTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('enseignant', function(Blueprint $table)
		{
			$table->integer('Code_Ens')->default(0)->index('Code_Ens');
			$table->string('NomPren', 50)->nullable();
			$table->string('NomEns', 100)->nullable();
			$table->string('NomUser', 100)->nullable();
			$table->string('Passwd', 30)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('enseignant');
	}

}
