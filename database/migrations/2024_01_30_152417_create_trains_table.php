<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table->string('company', 50);
            $table->string('departure_station', 50);
            $table->string('arrival_station', 50);
            $table->dateTime('departure_time', $precision = 0);
            $table->dateTime('arrival_time', $precision = 0);
            $table->string('train_code', 10);
            $table->tinyInteger('number_of_carriages');
            $table->boolean('is_on_time')->default(true);
            $table->boolean('is_canceled')->default(false);


            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
