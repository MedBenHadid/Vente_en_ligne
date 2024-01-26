<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = new Product();
        $product->name = 'Product1';
        $product->price = '19.99';
        $product->photo = asset('storage/app/public/Product1.jpg');
        $product->categorie_id = 1;
        $product->save();

        $product = new Product();
        $product->name = 'Product2';
        $product->price = '59.99';
        $product->photo = asset('storage/app/public/Product2.jpg');
        $product->categorie_id = 2;
        $product->save();

        $product = new Product();
        $product->name = 'Product3';
        $product->price = '89.99';
        $product->photo = asset('storage/app/public/Product3.jpg');
        $product->categorie_id = 3;
    
        $product->save();

        $product = new Product();
        $product->name = 'Product4';
        $product->price = '139.99';
        $product->photo = asset('storage/app/public/Product4.jpg');
        $product->categorie_id = 4;
    
        $product->save();
    }
}
