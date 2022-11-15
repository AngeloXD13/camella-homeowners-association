<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateT11HoamemberFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t11_hoamember_files', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->unsignedBigInteger('hoa_id');
            $table->string('Type', 20);
            $table->text('Filename');
            $table->text('FileDirectory');
            $table->dateTime('DateUploaded');
            $table->string('Tag', 20)->nullable();
            $table->string('Status', 20)->nullable();
            $table->text('Remarks')->nullable();
            
            $table->foreign('hoa_id', 't11_hoamember_files_ibfk_1')->references('id')->on('t9_hoamember');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t11_hoamember_files');
    }
}
