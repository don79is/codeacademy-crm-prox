<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePrClientPersonsConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pr_client_persons_connections', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->string('id', 36)->unique('id_UNIQUE');
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->softDeletes();
			$table->string('client_id', 36)->index('fk_pr_client_person_description_connections_pr_client1_idx');
			$table->string('persons_id', 36)->index('fk_pr_client_person_description_connections_pr_persons1_idx');
			$table->string('positions_id', 225)->index('fk_pr_client_person_description_connections_pr_client_perso_idx');
			$table->text('comment', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pr_client_persons_connections');
	}

}
