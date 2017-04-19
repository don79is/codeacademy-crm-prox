<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPrPersonsProjectTypeConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pr_persons_project_type_connections', function(Blueprint $table)
		{
			$table->foreign('persons_types_id', 'fk_pr_client_persons_type_id_pr_person_types1')->references('id')->on('pr_person_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('persons_id', 'fk_pr_client_persons_type_id_pr_persons1')->references('id')->on('pr_persons')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('project_id', 'fk_pr_client_persons_type_id_pr_projects1')->references('id')->on('pr_projects')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pr_persons_project_type_connections', function(Blueprint $table)
		{
			$table->dropForeign('fk_pr_client_persons_type_id_pr_person_types1');
			$table->dropForeign('fk_pr_client_persons_type_id_pr_persons1');
			$table->dropForeign('fk_pr_client_persons_type_id_pr_projects1');
		});
	}

}
