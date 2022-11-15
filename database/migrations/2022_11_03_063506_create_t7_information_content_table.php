<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateT7InformationContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t7_information_content', function (Blueprint $table) {
            $table->BigIncrements('id',100); // TODO: set to increments and delete primary
            $table->unsignedBigInteger('i_catergory_id')->nullable();;
            $table->text('heading1')->nullable();
            $table->text('heading2')->nullable();
            $table->text('heading3')->nullable();
            $table->text('heading4')->nullable();
            $table->text('heading5')->nullable();
            $table->string('tag', 20)->nullable();
            $table->string('status', 20)->nullable();
            $table->text('remarks')->nullable();
            $table->timestamps();
            
            $table->foreign('i_catergory_id', 't7_information_content_ibfk_1')->references('id')->on('t6_information_category')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t7_information_content');
    }
}
