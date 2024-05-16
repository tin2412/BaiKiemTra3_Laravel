<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nhansu', function (Blueprint $table) {
            $table->unsignedBigInteger('quanlynhansu_id');
            $table->foreign('quanlynhansu_id')->references('id')->on('quanlynhansu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nhansu', function (Blueprint $table) {
            $table->dropForeign(['quanlynhansu_id']);
        });
    }
};
