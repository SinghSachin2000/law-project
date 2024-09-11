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
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->string('examDomain'); 
            $table->string('bannerUrl'); 
            $table->string('title'); 
            $table->json('description')->nullable(); 
            $table->json('eligibilityCritieria')->nullable(); 
            $table->json('carrerOpportunity')->nullable(); 
            $table->json('examPattern')->nullable(); 
            $table->json('about')->nullable(); 
            $table->json('role')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams');
    }
};
