<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePrPersonsProjectTypeConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pr_persons_project_type_connections', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->string('id', 36)->unique('id_UNIQUE');
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->softDeletes();
			$table->string('name', 36);
			$table->string('project_id', 36)->index('fk_pr_client_persons_type_id_pr_projects1_idx');
			$table->string('persons_id', 36)->index('fk_pr_client_persons_type_id_pr_persons1_idx');
			$table->string('persons_types_id', 36)->index('fk_pr_client_persons_type_id_pr_person_types1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pr_persons_project_type_connections');
	}

}
