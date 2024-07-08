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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('image');
            $table->string('heading');
            $table->string('tag_line_1', 500);
            $table->string('tag_line_2', 500);
            $table->string('video')->nullable();
            $table->string('benifit_title')->nullable();
            $table->string('benifit_image')->nullable();
            $table->string('para_1')->nullable();
            $table->string('para_2')->nullable();
            $table->string('use_title')->nullable();
            $table->text('use_text')->nullable();
            $table->string('warning_title')->nullable();
            $table->text('warning_text')->nullable();
            $table->string('facility_title')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
