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
        Schema::create('belong_to', function (Blueprint $table) {
            $table->id();
            // Pour spécifier la table et la colonne : constrained()
            $table->foreignId('order_id')->constrained('orders', 'id');
            $table->foreignId('product_id')->constrained('products', 'id');
            $table->timestamps();
            // $table->foreignId('order_id');
            // $table->foreignId('product_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('belong_to');
    }
};
