<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateT6InformationCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t6_information_category', function (Blueprint $table) {
            $table->BigIncrements('id'); // TODO: set to increments and delete primary
            $table->text('title');
            $table->string('tag', 20)->nullable();
            $table->string('status', 25)->nullable();
            $table->string('parameters')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t6_information_category');
    }
}
