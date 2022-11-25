<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceOrderinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_orderinfo', function (Blueprint $table) {
            $table->id();
            $table->integer('client_id')->unsigned();
            $table->foreign('id')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');
            $table->date('schedule');
            $table->text('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_orderinfo');
    }
}
