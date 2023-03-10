<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysAdvantageUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('adventage_user', function (Blueprint $table) {
            $table->foreign('service_id', 'fk_advantage_user_to_service')->references('id')
                ->on('service')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('adventage_user', function (Blueprint $table) {
            $table->dropForeign('fk_advantage_user_to_service');
        });
    }
}
