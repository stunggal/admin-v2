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
            $table->string('about')->nullable();
            $table->date('executing');
            $table->string('time')->nullable();
            $table->string('organizer');
            $table->foreignId('status_id')->default('1');
            $table->foreignId('responsible_id');
            $table->foreignId('aprovedby_id')->nullable();
            $table->foreignId('staff_id')->nullable();
            $table->foreignId('news_id')->nullable();
            $table->foreignId('comitte_id')->nullable();
            $table->foreignId('participant_id')->nullable();
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
