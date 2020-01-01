<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInscritmoduleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inscritmodule', function(Blueprint $table)
		{
			$table->integer('AnScol')->index('AnScol');
			$table->string('Sem', 2);
			$table->string('Promo', 4)->nullable();
			$table->string('Matricule', 10)->index('Matricule');
			$table->string('Code_Mat', 12)->index('Code_Mat');
			$table->float('CcNote', 10, 0)->nullable();
			$table->float('TpNote', 10, 0)->nullable();
			$table->float('CiNote', 10, 0)->nullable();
			$table->float('CfNote', 10, 0)->nullable();
			$table->float('MoyMod', 10, 0)->nullable();
			$table->primary(['AnScol','Sem','Matricule','Code_Mat']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inscritmodule');
	}

}
