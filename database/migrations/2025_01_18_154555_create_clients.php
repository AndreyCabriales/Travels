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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30)->nullable()->default('Name');
            $table->string('last_name', 30)->nullable()->default('Last_name');
            $table->integer('celphone')->unsigned()->nullable()->default(1234919);
            $table->string('email', 50)->nullable()->default('example@gmail.com');
            $table->string('gender',10)->nullable()->default('Hombre');
            $table->string('nationality', 20)->nullable()->default('Mexican');
            $table->string('identify', 100)->nullable()->default('identify');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
