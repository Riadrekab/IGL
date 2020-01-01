<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnseignementsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('enseignements', function(Blueprint $table)
		{
			$table->integer('Code_Ens')->index('Code_Ens');
			$table->string('Code_Mat', 10)->index('Code_Mat');
			$table->string('Sec', 5);
			$table->string('Gr', 3)->index('Gr');
			$table->integer('Anscol')->nullable()->default(0);
			$table->string('Sem', 2)->nullable();
			$table->primary(['Code_Ens','Code_Mat','Sec','Gr']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('enseignements');
	}

}
