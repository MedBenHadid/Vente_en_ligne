<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrderResource;
use App\Models\Orders;
use Illuminate\Http\Request;

class orderController extends Controller
{
    public function getallOrder()
    {
        $orders = Orders::all();
        return OrderResource::collection($orders);
    }
}
