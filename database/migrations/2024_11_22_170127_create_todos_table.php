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
        Schema::create('todos', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('title'); // Task title
            $table->text('description')->nullable(); // Optional description
            $table->boolean('status')->default(false); // Task status: false = incomplete, true = complete
            $table->timestamps(); // Created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('todos'); // Drops the table if rolled back
    }
};
