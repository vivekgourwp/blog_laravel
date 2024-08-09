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
            $table->id(); // Auto-incrementing ID (primary key)
            $table->string('name'); // Name of the product
            $table->text('description')->nullable(); // Description of the product
            $table->decimal('regular_price', 8, 0); // Price of the product
            $table->decimal('sale_price', 8, 0); // Price of the product
            $table->integer('stock_quantity')->default(0); // Stock quantity
            $table->string('categories')->nullable(); // Category of the product
            $table->string('sku')->unique(); // Stock Keeping Unit (unique)
            $table->timestamps(); // Created at and Updated at timestamps
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
