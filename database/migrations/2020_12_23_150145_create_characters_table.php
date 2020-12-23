<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('created_by');
            $table->string('character_sheet_url')->nullable();
            $table->string('avatar_url');
            $table->integer('campaign_id');
            $table->string('player_name');
            $table->string('name');
            $table->text('backstory');
            $table->text('secrets');
            $table->integer('hometown_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characters');
    }
}
