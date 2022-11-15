<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateT10HoamemberPersonalinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t10_hoamember_personalinfo', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->unsignedBigInteger('hoa_id');
            $table->string('Status', 20)->nullable();
            $table->text('Remarks')->nullable();
            
            $table->foreign('hoa_id')->references('id')->on('t9_hoamember');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t10_hoamember_personalinfo');
    }
}
