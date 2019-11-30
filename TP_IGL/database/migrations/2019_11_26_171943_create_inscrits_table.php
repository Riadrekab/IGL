<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInscritsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inscrits', function(Blueprint $table)
		{
			$table->integer('AnScol');
			$table->string('Sem', 2);
			$table->string('Promo', 4)->nullable();
			$table->string('Sect', 1)->nullable();
			$table->string('Gr', 3)->nullable()->index('Gr');
			$table->string('Matricule', 10)->index('Matricule');
			$table->boolean('Ne')->nullable();
			$table->float('MoySem', 10, 0)->nullable();
			$table->float('MoyRach', 10, 0)->nullable();
			$table->float('Moyenne', 10, 0)->nullable();
			$table->integer('Rang')->nullable();
			$table->primary(['AnScol','Sem','Matricule']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inscrits');
	}

}
