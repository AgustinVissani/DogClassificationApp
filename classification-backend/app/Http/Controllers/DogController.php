<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dog;

class DogController extends Controller
{
    public function index()
    {
        $dogs = Dog::all();
        return response()->json(['dogs' => $dogs], 200);
    }

    public function add(Request $request)
    {
        $request->validate([
            'breed_name' => 'required',
            'size' => 'required',
            'hair_color' => 'required',
        ]);

        $dog = Dog::create($request->all());

        return response()->json(['message' => 'Dog created successfully', 'dog' => $dog], 201);
    }

    public function uploadImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images/dogs'), $imageName);

        return response()->json(['image_path' => 'images/dogs/' . $imageName]);
    }
}
