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
        Schema::create('cources', function (Blueprint $table) {
            $table->id();
            $table->string('courseDomain'); 
            $table->string('bannerUrl'); 
            $table->string('title'); 
            $table->text('description')->nullable(); 
            $table->decimal('price', 8, 2); 
            $table->string('mode'); 
            $table->string('medium'); 
            $table->text('educationalEligibility')->nullable(); 
            $table->text('professionalEligibility')->nullable(); 
            $table->string('ageLimit')->nullable(); 
            $table->json('courseIncludes')->nullable(); 
            $table->json('stateSpecificPreparation')->nullable(); 
            $table->json('testSeries')->nullable(); 
            $table->json('whyChoose')->nullable(); 
            $table->json('whoShouldJoin')->nullable(); 
            $table->json('testSchedule')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cources');
    }
};
