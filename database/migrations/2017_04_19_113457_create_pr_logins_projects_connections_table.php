<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePrLoginsProjectsConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pr_logins_projects_connections', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->string('id', 45)->unique('id_UNIQUE');
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('update_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->softDeletes();
			$table->string('login_id', 36)->index('fk_pr_projects_login_pr_logins1_idx');
			$table->string('projects_id', 36)->index('fk_pr_projects_login_pr_projects1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pr_logins_projects_connections');
	}

}
