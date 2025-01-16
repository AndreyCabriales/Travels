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
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->string('description', 100)->nullable()->default('travels');
            $table->foreignId('origin_id');
            $table->foreignId('destination_id');
            $table->string('travel_date', 30)->nullable()->default('text');
            
        
            $table->timestamps();

            $table->foreign('origin_id')->references('id')->on('origins')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('destination_id')->references('id')->on('destinations')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travels');
    }
};
