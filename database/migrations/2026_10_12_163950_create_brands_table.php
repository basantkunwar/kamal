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
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
                     // Basic information
            $table->string('name');
            $table->string('slug')->unique();
            $table->longtext('description')->nullable();

            // Parent category for subcategories
          

            // Image path
            $table->string('image')->nullable();

            // Status and ordering
            $table->boolean('status')->default(true);
            $table->unsignedInteger('sort_order')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brands');
    }
};
