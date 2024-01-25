<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = new Produit();
        $product->name = 'Produit1';
        $product->price = '19.99';
        $product->photo = '';
        $product->categorie_id = 1;
    

        $product = new Produit();
        $product->name = 'Produit2';
        $product->price = '59.99';
        $product->photo = '';
        $product->categorie_id = 2;
    
        $product = new Produit();
        $product->name = 'Produit3';
        $product->price = '89.99';
        $product->photo = '';
        $product->categorie_id = 3;
    
        $product->save();
    }
}
