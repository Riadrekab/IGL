<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAbsencesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('absences', function(Blueprint $table)
		{
			$table->integer('Anscol');
			$table->string('Sem', 2);
			$table->char('Matricule', 10)->index('Matricule');
			$table->string('Matiere', 10);
			$table->dateTime('Jour');
			$table->boolean('justifie')->default(0);
			$table->string('TypAbs', 20)->nullable();
			$table->primary(['Matricule','Matiere','Jour','Anscol','Sem']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('absences');
	}

}
