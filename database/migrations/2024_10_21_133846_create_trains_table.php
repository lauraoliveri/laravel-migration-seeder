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
            $table->id()->autoIncrement()->unique();
            $table->string('company', 64); 
            $table->string('dep_station', 64);  
            $table->string('arr_station', 64);
            $table->time('arr_time');
            $table->time('dep_time');
            $table->string('train_code', 6);
            $table->tinyInteger('carriages_num')->nullable()->unsigned();
            $table->boolean('on_time')->default(true);
            $table->boolean('cancelled')->default(false);
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
