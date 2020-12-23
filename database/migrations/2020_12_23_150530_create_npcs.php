<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNpcs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('npcs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('created_by');
            $table->integer('campaign_id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->boolean('dead')->default(false);
            $table->text('wares')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('npcs');
    }
}
