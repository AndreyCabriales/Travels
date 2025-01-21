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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->foreignID('travel_id');
            $table->double('Establecimientos', 15, 8)->nullable()->default(123.4567);
            $table->double('Gasolina', 15, 8)->nullable()->default(123.4567);
            $table->double('Asientos', 15, 8)->nullable()->default(123.4567);
            $table->double('Total', 15, 8)->nullable()->default(123.4567);
            $table->timestamps();

            $table->foreign('travel_id')->references('id')->on('travels')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
