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

            // User who posted the listing
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();

            // Category
            $table->foreignId('category_id')->constrained('categories')->cascadeOnDelete();
            $table->foreignId('sub_category_id')->constrained('sub_categories')->cascadeOnDelete();

            // Basic Details
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('detail')->nullable();
            $table->string('image')->nullable();

            // Location
            $table->foreignId('country_id')->constrained('countries')->cascadeOnDelete();
            $table->foreignId('state_id')->constrained('states')->cascadeOnDelete();
            $table->foreignId('city_id')->constrained('cities')->cascadeOnDelete();
            $table->foreignId('area_id')->constrained('areas')->cascadeOnDelete();

            // Price
            $table->decimal('price', 12, 2)->nullable();

            // Active / Inactive
            $table->boolean('status')->default(true);

            $table->timestamps();

            // Listing/filtering indexes
            $table->index(['category_id', 'status']);
            $table->index(['city_id', 'status']);
            $table->index(['area_id', 'status']);
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
