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
        Schema::create('airhostesses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
                    $table->integer('age');
            $table->string('filghtnumber');
             $table->foreignId('flights_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('airhostesses');
    }
};