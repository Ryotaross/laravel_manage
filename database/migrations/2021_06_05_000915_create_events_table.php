<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('mission_id');
            $table->foreign('mission_id')->references('id')->on('missions');
            $table->date('date');
            $table->string('time');
            $table->string('content');
            $table->string('equip');
            $table->string('impact');
            $table->string('thing');
            $table->string('other');
            $table->integer('great');
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
        Schema::dropIfExists('events');
    }
}
