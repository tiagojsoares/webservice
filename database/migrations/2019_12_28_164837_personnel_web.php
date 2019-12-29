<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PersonnelWeb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnelWeb', function (Blueprint $table) {


            $table->string('First_Name')->nullable();
            $table->string('MiddleName')->nullable();
            $table->string('Last_Name')->nullable();
            $table->string('PER_import')->nullable();
            $table->string('Text1')->primary();
            $table->string('Text25')->nullable();
            $table->string('Text24')->nullable();
            $table->string('Text23')->nullable();
            $table->string('Text22')->nullable();
            $table->string('Text21')->nullable();
            $table->string('Text20')->nullable();
            $table->string('Text19')->nullable();
            $table->string('Text18')->nullable();
            $table->string('Text17')->nullable();
            $table->string('Text16')->nullable();
            $table->string('Text15')->nullable();
            $table->string('Text14')->nullable();
            $table->string('Text13')->nullable();
            $table->string('Text12')->nullable();
            $table->string('Text11')->nullable();
            $table->string('Text10')->nullable();
            $table->string('Text9')->nullable();
            $table->string('Text8')->nullable();
            $table->string('Text7')->nullable();
            $table->string('Text6')->nullable();
            $table->string('Text5')->nullable();
            $table->string('Text4')->nullable();
            $table->string('Text3')->nullable();
            $table->string('Text2')->nullable();
            $table->dateTime('Time_Stamp')->nullable();
            $table->string('PersonnelType')->nullable();
            $table->boolean('Disabled')->nullable();
            $table->integer('Int1')->nullable();
            $table->integer('Int2')->nullable();
            $table->integer('Int3')->nullable();
            $table->integer('Int4')->nullable();
            $table->integer('Int5')->nullable();
            $table->integer('Int6')->nullable();
            $table->integer('Int7')->nullable();
            $table->integer('Int8')->nullable();
            $table->integer('Int9')->nullable();
            $table->integer('Logical1')->nullable();
            $table->integer('Logical2')->nullable();
            $table->integer('Logical3')->nullable();
            $table->integer('Logical4')->nullable();
            $table->dateTime('Date1')->nullable();
            $table->dateTime('Date2')->nullable();
            $table->dateTime('Date3')->nullable();
            $table->dateTime('Date4')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personnelWeb');
    }
}
