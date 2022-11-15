<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateT13ComplaintsMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t13_complaints_message', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->unsignedBigInteger('c_thread_id');
            $table->dateTime('Send_Date');
            $table->text('Body');
            $table->unsignedBigInteger('hoa_id');
            
            $table->foreign('c_thread_id', 't13_complaints_message_ibfk_1')->references('id')->on('t12_complaints_thread');
            $table->foreign('hoa_id', 't13_complaints_message_ibfk_2')->references('id')->on('t9_hoamember');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t13_complaints_message');
    }
}
