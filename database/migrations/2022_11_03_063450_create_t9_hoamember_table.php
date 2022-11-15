<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateT9HoamemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t9_hoamember', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('username', 25);
            $table->string('FirstName', 50);
            $table->string('LastName', 50);
            $table->string('Email', 320)->nullable()->unique('email');
            $table->integer('PhoneNumber')->nullable()->unique('phonenumber');
            $table->text('Password');
            $table->string('Tag', 20)->nullable();
            $table->string('Status', 20)->nullable();
            $table->text('Remarks')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t9_hoamember');
    }
}
