<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function getAllProducts() {
        $products = Users::orderBy('user', 'asc')->get();

        return response()->json(['data'=> $products]);
    }
}
