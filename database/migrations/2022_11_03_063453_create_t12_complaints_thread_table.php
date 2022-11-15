<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateT12ComplaintsThreadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t12_complaints_thread', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->text('Subject');
            $table->dateTime('DatePosted');
            $table->unsignedBigInteger('hoa_id');
            $table->string('Severity', 20);
            $table->string('Tag', 20);
            $table->string('Status', 20);
            
            $table->foreign('hoa_id', 't12_complaints_thread_ibfk_1')->references('id')->on('t9_hoamember');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t12_complaints_thread');
    }
}
