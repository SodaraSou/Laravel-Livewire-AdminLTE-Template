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
        Schema::create('lego_sets', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('set_number')->unique();
            $table->foreignId('theme_id')->constrained()->onDelete('cascade');
            $table->integer('piece_count')->nullable();
            $table->string('age_range')->nullable();
            $table->decimal('price', 10, 2);
            $table->date('release_date')->nullable();
            $table->integer('stock_quantity')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lego_sets');
    }
};
