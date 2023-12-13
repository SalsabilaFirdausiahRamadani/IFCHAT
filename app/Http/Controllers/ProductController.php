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


    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        // Validation, e.g., $request->validate([...]);

        Users::create($request->all());

        return redirect()->route('users.index')->with('success', 'User created successfully');
    }

    public function show(Users $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(Users $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, Users $user)
    {
        // Validation, e.g., $request->validate([...]);

        $user->update($request->all());

        return redirect()->route('users.index')->with('success', 'User updated successfully');
    }

    public function destroy(Users $user)
    {
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully');
    }
}