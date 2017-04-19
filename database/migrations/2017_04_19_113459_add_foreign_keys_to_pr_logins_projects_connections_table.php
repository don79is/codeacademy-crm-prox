<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPrLoginsProjectsConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pr_logins_projects_connections', function(Blueprint $table)
		{
			$table->foreign('login_id', 'fk_pr_projects_login_pr_logins1')->references('id')->on('pr_logins')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('projects_id', 'fk_pr_projects_login_pr_projects1')->references('id')->on('pr_projects')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pr_logins_projects_connections', function(Blueprint $table)
		{
			$table->dropForeign('fk_pr_projects_login_pr_logins1');
			$table->dropForeign('fk_pr_projects_login_pr_projects1');
		});
	}

}
