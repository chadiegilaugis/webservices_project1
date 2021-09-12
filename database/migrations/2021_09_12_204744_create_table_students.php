<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableStudents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_students', function (Blueprint $table) {
            $table->id();
            $table->string('Firstname',25)->nullable();
            $table->string('Middlename',25)->nullable();
            $table->string('Lastname',25)->nullable();
            $table->date('Birthdate')->nullable();
            $table->string('Gender',12)->nullable();
            $table->string('Address',50)->nullable();
            $table->string('Citizenship',20)->nullable();
            $table->string('Religion',20)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_students');
    }
}