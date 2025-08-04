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
        Schema::create('homesliders', function (Blueprint $table) {
        $table->id();
        $table->string('heading1');
        $table->string('heading2');
        $table->string('description');
        $table->string('homesliderimage')->nullable();
        $table->timestamps();
        });
    }
    
    public function down(): void {
        Schema::dropIfExists('homesliders');
    }

};
