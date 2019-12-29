<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PersoCred extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perso_Cred', function (Blueprint $table) {
            $table->dateTime('Time_Stamp')->nullable();
            $table->string('Text3')->nullable();
            $table->string('Text1')->primary();
            $table->string('Clearance_name')->nullable();
            $table->string('Cred_import')->nullable()->default('Default');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perso_Cred');
    }
}
