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
        Schema::create('testimonials', function (Blueprint $table) {
        $table->id();
        $table->string('user');
        $table->tinyInteger('rating');
        $table->text('feedback');
        $table->timestamps();
        });
    }
    
    public function down(): void {
        Schema::dropIfExists('testimonials');
    }

};
