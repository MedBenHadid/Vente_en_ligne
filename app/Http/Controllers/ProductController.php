<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function getByCategory($categoryId)
    {
        $products = Produit::where('categorie_id', $categoryId)->get();
        return ProductResource::collection($products);
    }

public function getallProduct()
{
    $products = Produit::all();
    return ProductResource::collection($products);
}

}
