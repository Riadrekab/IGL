<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInscritsueTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inscritsue', function(Blueprint $table)
		{
			$table->integer('AnScol');
			$table->string('Promo', 4)->nullable();
			$table->string('Matricule', 10)->index('Matricule');
			$table->float('MoySem1', 10, 0)->nullable();
			$table->float('MoyRach1', 10, 0)->nullable();
			$table->boolean('Ne1')->nullable();
			$table->float('MoySem2', 10, 0)->nullable();
			$table->float('MoyRach2', 10, 0)->nullable();
			$table->boolean('Ne2')->nullable();
			$table->float('MoyAnu', 10, 0)->nullable();
			$table->float('MoyRan', 10, 0)->nullable();
			$table->integer('Rang')->nullable();
			$table->string('Decision', 30)->nullable();
			$table->primary(['AnScol','Matricule']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inscritsue');
	}

}
