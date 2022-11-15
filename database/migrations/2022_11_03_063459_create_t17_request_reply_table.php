<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateT17RequestReplyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t17_request_reply', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->unsignedBigInteger('req_id');
            $table->dateTime('Date');
            $table->text('Message');
            $table->unsignedBigInteger('director_id');
            $table->string('Tag', 20)->nullable();
            $table->text('Remarks')->nullable();
            
            $table->foreign('req_id', 't17_request_reply_ibfk_1')->references('id')->on('t16_request');
            $table->foreign('director_id')->references('id')->on('t2_boardofdirector'); // removed the contraints name
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t17_request_reply');
    }
}
