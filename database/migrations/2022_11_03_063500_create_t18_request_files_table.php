<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateT18RequestFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t18_request_files', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->unsignedBigInteger('req_id');
            $table->string('Type', 20);
            $table->text('Filename');
            $table->text('FileDirectory');
            $table->dateTime('DateUploaded');
            $table->string('Tag', 20)->nullable();
            $table->text('Remarks')->nullable();
            
            $table->foreign('req_id', 't18_request_files_ibfk_1')->references('id')->on('t16_request');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t18_request_files');
    }
}
