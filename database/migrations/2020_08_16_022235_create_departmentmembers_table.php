<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentmembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departmentmembers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('departmentId');
            $table->unsignedBigInteger('memberId');
            $table->string('memberPosition');
            $table->timestamps();

            // $table->foreign('departmentId')->references('id')->on('dpartments');
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
        Schema::dropIfExists('departmentmembers');
    }
}
