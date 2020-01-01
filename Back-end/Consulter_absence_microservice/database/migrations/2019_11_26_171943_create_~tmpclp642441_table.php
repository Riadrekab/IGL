<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class Create~tmpclp642441Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('~tmpclp642441', function(Blueprint $table)
		{
			$table->string('Matricule', 7);
			$table->string('Matiere', 10)->index('Matiere');
			$table->dateTime('Jour');
			$table->string('justifie', 3)->nullable()->default('Non');
			$table->integer('Anscol')->nullable();
			$table->string('Sem', 2)->nullable();
			$table->string('TypAbs', 20)->nullable();
			$table->primary(['Matricule','Matiere','Jour']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('~tmpclp642441');
	}

}
