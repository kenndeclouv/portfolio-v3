<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
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
            $table->json('project_previews')->nullable();
            $table->string('title');
            $table->string('video')->nullable();
            $table->string('year')->default('2026');
            $table->string('category');
            $table->text('description')->nullable();
            $table->text('challenge')->nullable();
            $table->string('as')->nullable();
            $table->boolean('show_in_home')->default(false);
            $table->boolean('show_in_projects')->default(false);
            $table->enum('theme', ['dark-content', 'light-content'])->default('light-content');
            $table->text('research')->nullable();
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
