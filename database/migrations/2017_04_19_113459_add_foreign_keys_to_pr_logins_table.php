<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPrLoginsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pr_logins', function(Blueprint $table)
		{
			$table->foreign('login_name_id', 'fk_pr_logins_pr_logins_names1')->references('id')->on('pr_logins_names')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pr_logins', function(Blueprint $table)
		{
			$table->dropForeign('fk_pr_logins_pr_logins_names1');
		});
	}

}
