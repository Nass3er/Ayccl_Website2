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
        Schema::create('post_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id')->constrained();
            $table->foreignId('category_id')->nullable()->constrained();
            $table->string('title')->nullable();
            $table->string('title_en')->nullable();
            $table->string('slug')->nullable();
            $table->string('slug_en')->nullable();
            $table->text('content')->nullable();
            $table->text('content_en')->nullable();
            $table->string('color')->nullable();
            $table->integer('order')->nullable();
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }
    // $table->unique(['post_id', 'lang_no']);

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_details');
    }
};
