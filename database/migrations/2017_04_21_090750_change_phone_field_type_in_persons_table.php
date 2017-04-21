<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangePhoneFieldTypeInPersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pr_persons', function (Blueprint $table) {

            $table->string('phone', 225)->change();
        });
    }


/**
 * Reverse the migrations.
 *
 * @return void
 */
    public
    function down()
   {
       Schema::table('pr_persons', function (Blueprint $table) {

           $table->integer('phone')->change()->nullable();
       });
   }
}
