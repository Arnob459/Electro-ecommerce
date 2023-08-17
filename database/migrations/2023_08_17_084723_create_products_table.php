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
            $table->integer('cat_id');
            $table->string('name');
            $table->string('expiry_date')->nullable();
            $table->decimal('min_price', 5, 2)->nullable();
            $table->decimal('max_price', 5, 2)->nullable();
            $table->decimal('discount', 5, 2)->nullable();
            $table->decimal('price', 5, 2)->nullable();
            $table->bigInteger('quantity');
            $table->string('sku')->nullable();
            $table->boolean('status')->default(1);
            $table->string('image');
            $table->string('description',1000)->nullable();
            $table->string('redeem')->nullable();
            $table->timestamps();
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
