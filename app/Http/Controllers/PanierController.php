<?php

namespace App\Http\Controllers;

use App\Models\Panier;
use Illuminate\Http\Request;
use App\Http\Resources\PanierResource;

class PanierController extends Controller
{
    public function getAllPaniers()
{
    $paniers = Panier::all();
    return PanierResource::collection($paniers);
}

public function addPanier(Request $request)
{
    $request->validate([
        'user_id' => 'required|exists:users,id',
    ]);

    $panier = Panier::create($request->all());

    return new PanierResource($panier);
}

public function updatePanier(Request $request, $panierId)
{
    $panier = Panier::findOrFail($panierId);

    $request->validate([
        'user_id' => 'required|exists:users,id',
    ]);

    $panier->update($request->all());

    return new PanierResource($panier);
}

public function deletePanier($panierId)
{
    $panier = Panier::findOrFail($panierId);
    $panier->delete();

    return response()->json($panier, 201);
}


}
