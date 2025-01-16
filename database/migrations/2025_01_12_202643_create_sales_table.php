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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->foreignID('travel_id');
            $table->foreignID('client_id');
            $table->string('sale_date', 30)->nullable()->default('text');
            $table->decimal('unit_price', 6, 2)->nullable()->default(123.45);
            $table->timestamps();

            $table->foreign('travel_id')->references('id')->on('travels')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('client_id')->references('id')->on('clients')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
