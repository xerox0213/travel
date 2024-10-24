<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('search', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('fromAirport');
            $table->string('toAirport');
            $table->string('login');
            $table->timestamp('createdAt');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('search');
    }
};
