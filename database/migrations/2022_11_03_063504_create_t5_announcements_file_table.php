<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateT5AnnouncementsFileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t5_announcements_file', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->unsignedBigInteger('announcement_id');
            $table->text('type');
            $table->text('title');
            $table->text('filename');
            $table->text('filedirectory')->nullable();
            $table->string('tag', 20)->nullable();
            $table->string('status', 20)->nullable();
            $table->text('remarks')->nullable();
            $table->timestamps();
            
            $table->foreign('announcement_id', 't5_announcements_file_ibfk_1')->references('id')->on('t4_announcements')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t5_announcements_file');
    }
}
