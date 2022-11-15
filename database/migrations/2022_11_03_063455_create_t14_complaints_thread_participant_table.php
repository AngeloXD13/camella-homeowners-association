<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateT14ComplaintsThreadParticipantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t14_complaints_thread_participant', function (Blueprint $table) {
            $table->unsignedBigInteger('c_thread_id'); // TODO: set to increments and delete primary
            $table->unsignedBigInteger('hoa_id',);
            
            $table->foreign('c_thread_id', 't14_complaints_thread_participant_ibfk_1')->references('id')->on('t12_complaints_thread');
            $table->foreign('hoa_id', 't14_complaints_thread_participant_ibfk_2')->references('id')->on('t9_hoamember');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t14_complaints_thread_participant');
    }
}
