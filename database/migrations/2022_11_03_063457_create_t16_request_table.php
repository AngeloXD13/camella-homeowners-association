<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateT16RequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t16_request', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->unsignedBigInteger('hoa_id');
            $table->string('Type', 20);
            $table->text('Subject')->nullable();
            $table->text('Body')->nullable();
            $table->text('Heading1')->nullable();
            $table->text('Heading2')->nullable();
            $table->text('Heading3')->nullable();
            $table->text('Heading4')->nullable();
            $table->text('Heading5')->nullable();
            $table->string('Status', 20);
            $table->dateTime('DatePosted');
            $table->string('Tag', 20)->nullable();
            $table->text('Remarks')->nullable();
            
            $table->foreign('hoa_id', 't16_request_ibfk_1')->references('id')->on('t9_hoamember');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t16_request');
    }
}
