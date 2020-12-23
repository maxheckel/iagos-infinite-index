<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PlayerResistancesVulnerabilities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character_resistances_vulnerabilities', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('resistance_vulnerability_id');
            $table->integer('character_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('character_resistances_vulnerabilities');
    }
}
