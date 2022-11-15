<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateT15ComplaintsFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t15_complaints_files', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->unsignedBigInteger('c_message_id');
            $table->string('Type', 20);
            $table->text('Filename');
            $table->text('FileDirectory');
            $table->dateTime('DateUploaded');
            $table->string('Tag', 20);
            $table->text('Remarks')->nullable();
            
            $table->foreign('c_message_id', 't15_complaints_files_ibfk_1')->references('id')->on('t13_complaints_message');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t15_complaints_files');
    }
}
