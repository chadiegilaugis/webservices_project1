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
        Schema::create('Students', function (Blueprint $table) {
            $table->id();
            $table->string('Firstname',25)->nullable();
            $table->string('Middlename',25)->nullable();
            $table->string('Lastname',25)->nullable();
            $table->date('Birthday')->nullable();
            $table->string('Gender',5)->nullable();
            $table->string('Address',50)->nullable();
            $table->string('Citizenship',50)->nullable();
            $table->string('Relagion',50)->nullable();
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