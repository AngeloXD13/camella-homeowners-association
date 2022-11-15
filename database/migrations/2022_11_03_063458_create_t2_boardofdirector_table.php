<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateT2BoardofdirectorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t2_boardofdirector', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->unsignedBigInteger('hoa_id')->nullable();
            $table->string('username', 25)->unique('username');
            $table->string('firstname', 25);
            $table->string('middleinitial', 3)->nullable();
            $table->string('lastname', 25);
            $table->string('email', 320)->unique('email');
            $table->string('phonenumber', 11)->unique('phonenumber');
            $table->string('password', 128);
            $table->string('position', 25)->nullable();
            $table->string('tag', 25)->nullable();
            $table->text('remarks')->nullable();
            $table->string('bod_image')->nullable();
            $table->timestamps();
            
            $table->foreign('hoa_id', 't2_boardofdirector_ibfk_1')->references('id')->on('t9_hoamember');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t2_boardofdirector');
    }
}
