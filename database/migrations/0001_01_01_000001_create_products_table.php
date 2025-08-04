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
            $table->unsignedBigInteger('productcategory_id')->nullable()->index(); // added index
            $table->string('heading')->nullable();
            $table->string('productimage')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('productcategory_id')
                  ->references('id')
                  ->on('productcategorys')
                  ->onDelete('set null');
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
