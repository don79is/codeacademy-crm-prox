<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPrClientPersonsConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pr_client_persons_connections', function(Blueprint $table)
		{
			$table->foreign('client_id', 'fk_pr_client_person_description_connections_pr_client1')->references('id')->on('pr_client')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('positions_id', 'fk_pr_client_person_description_connections_pr_client_persons1')->references('id')->on('pr_client_persons_positions')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('persons_id', 'fk_pr_client_person_description_connections_pr_persons1')->references('id')->on('pr_persons')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pr_client_persons_connections', function(Blueprint $table)
		{
			$table->dropForeign('fk_pr_client_person_description_connections_pr_client1');
			$table->dropForeign('fk_pr_client_person_description_connections_pr_client_persons1');
			$table->dropForeign('fk_pr_client_person_description_connections_pr_persons1');
		});
	}

}
