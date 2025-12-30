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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique(); // e.g. media-center-ayccl
            $table->string('slug_en')->unique(); // e.g. media-center-ayccl
            $table->string('title');   //page title
            $table->string('title_en');   //page title
            $table->text('background')->nullable();  // hero background
            $table->text('content')->nullable();  //important content
            $table->text('content_en')->nullable();  //important content
            $table->timestamps();
            // $table->unique(['slug', 'lang_no']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
