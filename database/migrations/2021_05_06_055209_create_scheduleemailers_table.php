<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScheduleemailersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scheduleemailers', function (Blueprint $table) {
            $table->bigIncrements('id')->UNSIGNED()->nullable(false);            
            $table->text('email')->nullable(false);
            $table->text('subject')->nullable(false);
            $table->text('body')->nullable(false);
            $table->timestamp('sche_time');
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
        Schema::dropIfExists('scheduleemailers');
    }
}
