<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceOrderlineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_orderline', function (Blueprint $table) {
            $table->id();
            // $table->integer('service_orderinfo_id')->unsigned();
            // $table->foreign('service_orderinfo_id')->references('id')->on('service_orderinfo')->onDelete('cascade')->onUpdate('cascade');
            // $table->integer('service_id')->unsigned();
            // $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('service_orderinfo_id')->constrained()->onDelete('cascade')->onUpdate('cascade');;
            $table->foreignId('service_id')->constrained()->onDelete('cascade')->onUpdate('cascade');;
            $table->integer('session');
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
        Schema::dropIfExists('service_orderline');
    }
}
