<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PersoCard extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perso_Card', function (Blueprint $table) {
            $table->integer('First_Name')->primary();
            $table->dateTime('Time_Stamp')->nullable();
            $table->string('Text3');
            $table->string('Text1');
            $table->string('Card_import')->nullable()->default('Default');
            $table->string('CHUIDFormatKey')->nullable()->default('Card Only');
            $table->boolean('Disabled')->nullable();
            $table->boolean('Lost')->nullable();
            $table->boolean('Stolen')->nullable();
            $table->string('AccessType')->default('CardAccess');
            $table->dateTime('ativation')->nullable();
            $table->dateTime('expiration')->nullable();




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perso_Card');
    }
}
