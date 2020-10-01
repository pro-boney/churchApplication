<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFellowshipmembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fellowshipmembers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fellowshipId');
            $table->unsignedBigInteger('memberId');
            $table->string('memberPosition');
            $table->timestamps();

            // $table->foreign('fellowshipId')->references('id')->on('fellowships');
            // $table->foreign('memberId')->references('id')->on('members');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fellowshipmembers');
    }
}
