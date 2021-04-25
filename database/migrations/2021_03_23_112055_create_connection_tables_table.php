<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConnectionTablesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('connection_tables', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('user_id1')->nullable();
            $table->unsignedBigInteger('user_id2')->nullable();
            $table->integer('send_request')->nullable();
            $table->integer('request_accepted')->nullable();
            $table->foreign('user_id1')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('user_id2')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('connection_tables');
    }
}