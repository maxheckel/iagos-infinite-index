<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResistances extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resistances_vulnerabilities', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('created_by');
            $table->integer('campaign_id');
            $table->string('type');
            $table->string('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resistances_vulnerabilities');
    }
}
