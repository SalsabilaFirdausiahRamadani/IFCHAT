<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getAllProducts() {
        $products = Users::orderBy('user', 'asc')->get();

        return response()->json(['data'=> $products]);

    }
}
