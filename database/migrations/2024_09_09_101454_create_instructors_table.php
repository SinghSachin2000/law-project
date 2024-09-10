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
        Schema::create('instructors', function (Blueprint $table) {
            $table->id();
            $table->string('imgurl');
            $table->string('name');
            $table->text('description');
            $table->string('number')->nullable();
            $table->string('email')->nullable();
            $table->text('address')->nullable();
            $table->string('facebookid')->nullable();
            $table->string('twitterid')->nullable();
            $table->string('instgramid')->nullable();
            $table->string('linkedinid')->nullable();
            $table->json('education')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instructors');
    }
};
