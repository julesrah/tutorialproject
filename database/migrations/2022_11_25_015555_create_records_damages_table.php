<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsDamagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records_damages', function (Blueprint $table) {
            $table->id();
            $table->integer('record_id')->unsigned();
            $table->foreign('record_id')->references('id')->on('records')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('damage_id')->unsigned();
            $table->foreign('damage_id')->references('id')->on('damages')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreignId('record_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            // $table->foreignId('damage_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('records_damages');
    }
}
