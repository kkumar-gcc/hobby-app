<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToHobbiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hobbies', function (Blueprint $table) {
           $table->unsignedBigInteger('user_id')
           ->after('id')
           ->nullable();

           $table->foreign('user_id')
           ->references('id')
           ->on('users')
           ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hobbies', function (Blueprint $table) {
          $table->dropForeign(['user_id']);
          $table->dropColumn('user_id');
        });
    }
}
