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
        Schema::create('products', function (Blueprint $table) {
            $table->id();

        // Basic Information
        $table->string('name');
        $table->string('sku')->nullable()->unique();
        $table->longtext('description');

        // Relationships
        $table->foreignId('category_id')
            ->constrained('categories')
            ->restrictOnDelete();

        $table->foreignId('brand_id')
            ->constrained('brands')
            ->restrictOnDelete();


        // 1 = Available, 0 = Unavailable
        $table->boolean('status')->default(true);

        // Pricing Information
        $table->decimal('purchase_price', 12, 2)->nullable();
        $table->decimal('price', 12, 2);
        $table->decimal('discount', 5, 2)->nullable();

        // Inventory & Shipping
        $table->unsignedInteger('stock')->default(0);
        $table->decimal('weight', 8, 2)->nullable();

        // Product Image Path
        $table->string('image')->nullable();

        $table->timestamps();
        $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
