<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acaras', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamp('executing');
            $table->string('organizer');
            $table->foreignId('status_id');
            $table->foreignId('responsible');
            $table->foreignId('aproved_by');
            $table->foreignId('staff');
            $table->foreignId('news_id');
            $table->foreignId('comitte');
            $table->foreignId('participant');
            $table->string('place');
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
        Schema::dropIfExists('acaras');
    }
};
