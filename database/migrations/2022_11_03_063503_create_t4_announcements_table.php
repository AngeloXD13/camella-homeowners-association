<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateT4AnnouncementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t4_announcements', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->text('subject')->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('director_id')->nullable();
            $table->string('severity', 10)->nullable();
            $table->string('tag', 10)->nullable();
            $table->string('status', 20)->nullable();
            $table->timestamps();
            
            $table->foreign('director_id', 't4_announcements_ibfk_1')->references('id')->on('t2_boardofdirector');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t4_announcements');
    }
}
