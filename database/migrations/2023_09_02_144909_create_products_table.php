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
            $table->unsignedBigInteger('category_id');
            $table->string('name');
            $table->integer('prise');
            $table->integer('weight');
            $table->integer('voltage')->nullable();
            $table->string('model');
            $table->string('power')->nullable();
            $table->string('color');
            $table->string('category');
            $table->text('images');
            $table->string('items')->nullable();
            $table->text('body');
            $table->integer('visit')->default(0);
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
