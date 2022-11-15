<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateT3BoardofdirectorRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t3_boardofdirector_role', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->unsignedBigInteger('director_id');
            $table->integer('m_announcements')->default(0);
            $table->integer('m_hoaMembers')->default(0);
            $table->integer('m_infos')->default(0);
            $table->integer('m_complaints')->default(0);
            $table->integer('m_requests')->default(0);
            $table->integer('m_gallery')->default(0);
            $table->timestamps();
            
            $table->foreign('director_id', 't3_boardofdirector_role_ibfk_1')->references('id')->on('t2_boardofdirector')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t3_boardofdirector_role');
    }
}
