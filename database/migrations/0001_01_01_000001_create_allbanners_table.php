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
        Schema::create('allbanners', function (Blueprint $table) {
            $table->id();
            $table->string('aboutimage')->nullable();
            $table->string('productimage')->nullable();
            $table->string('certificateimage')->nullable();
            $table->string('contactusimage')->nullable();
            $table->timestamps();
        });
    }
    
    public function down(): void {
        Schema::dropIfExists('allbanners');
    }

};
