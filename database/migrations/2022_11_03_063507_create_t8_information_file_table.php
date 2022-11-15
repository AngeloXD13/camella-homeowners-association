<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateT8InformationFileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t8_information_file', function (Blueprint $table) {
            $table->BigIncrements('id',100); // TODO: set to increments and delete primary
            $table->unsignedBigInteger('i_content_id');
            $table->string('type', 20);
            $table->text('title');
            $table->text('filename');
            $table->text('filedirectory');
            $table->string('tag', 20)->nullable();
            $table->string('status', 20)->nullable();
            $table->text('remarks')->nullable();
            $table->timestamps();
            
            $table->foreign('i_content_id', 't8_information_file_ibfk_1')->references('id')->on('t7_information_content')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t8_information_file');
    }
}
