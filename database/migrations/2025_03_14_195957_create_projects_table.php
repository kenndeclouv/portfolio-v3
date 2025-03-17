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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('link')->nullable();
            $table->string('image')->nullable();
            $table->string('second_image')->nullable();
            $table->string('first_preview')->nullable();
            $table->string('second_preview')->nullable();
            $table->string('third_preview')->nullable();
            $table->string('fourth_preview')->nullable();
            $table->string('fifth_preview')->nullable();
            $table->string('title');
            $table->string('video')->nullable();
            $table->integer('year');
            $table->string('category');
            $table->text('description')->nullable();
            $table->text('challenge')->nullable();
            $table->string('as')->nullable();
            $table->enum('theme',['dark-content','light-content'])->default('light-content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
