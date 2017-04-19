<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPrProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pr_projects', function(Blueprint $table)
		{
			$table->foreign('client_id', 'fk_pr_projects_pr_client1')->references('id')->on('pr_client')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('type_id', 'fk_pr_projects_pr_projects_types1')->references('id')->on('pr_projects_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pr_projects', function(Blueprint $table)
		{
			$table->dropForeign('fk_pr_projects_pr_client1');
			$table->dropForeign('fk_pr_projects_pr_projects_types1');
		});
	}

}
