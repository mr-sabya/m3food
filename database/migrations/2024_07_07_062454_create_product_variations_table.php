<?php

use App\Models\Attribute;
use App\Models\AttributeValue;
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
        Schema::create('product_variations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->string('title');
            $table->boolean('is_stock')->default(0);
            $table->integer('stock')->nullable();

            $table->float('wight')->nullable();

            $table->float('lenght')->nullable();
            $table->float('width')->nullable();
            $table->float('height')->nullable();

            $table->integer('price');
            $table->integer('old_price')->nullable();

            $table->string('image')->nullable();

            $table->foreignIdFor(Attribute::class);
            $table->foreignIdFor(AttributeValue::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_variations');
    }
};
