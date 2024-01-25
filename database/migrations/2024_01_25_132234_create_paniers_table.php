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
        Schema::create('paniers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->decimal('total_price', 8, 2);
            $table->timestamps();
        });
        Schema::create('panier_produit', function (Blueprint $table) {
            $table->foreignId('panier_id')->constrained();
            $table->foreignId('produit_id')->constrained();
            $table->primary(['panier_id', 'produit_id']);
            $table->integer('quantity')->default(1); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paniers');
        Schema::dropIfExists('panier_produit');

    }
};
