<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
            'breed_name' => 'required|string|max:50',
            'size' => 'required',
            'hair_color' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/dogs', 'public');
        } else {
            $imagePath = null;
        }

        $dog = Dog::create([
            'breed_name' => $request->breed_name,
            'size' => $request->size,
            'hair_color' => $request->hair_color,
            'image_path' => $imagePath,
        ]);

        return response()->json(['message' => 'Dog created successfully', 'dog' => $dog], 200);
    }

    public function delete($id)
    {
        $dog = Dog::find($id);

        if (!$dog) {
            return response()->json(['error' => 'Dog not found'], 404);
        }

        if ($dog->image_path) {
            Storage::disk('public')->delete($dog->image_path);
        }

        $dog->delete();

        return response()->json(['message' => 'Dog deleted successfully'], 200);
    }

    public function edit(Request $request, $id)
    {
        $dog = Dog::find($id);


        if (!$dog) {
            return response()->json(['error' => 'Dog not found'], 404);
        }

        $validationRules = [
            'breed_name' => 'sometimes|required|string|max:50',
            'size' => 'sometimes|required',
            'hair_color' => 'sometimes|required|string',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];

        foreach ($validationRules as $field => $rule) {
            if (!$request->has($field)) {
                unset($validationRules[$field]);
            }
        }

        if ($dog->image_path && $request->hasFile('image')) {
            Storage::disk('public')->delete($dog->image_path);
        }

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/dogs', 'public');
            $dog->image_path = $imagePath;
        }

        $dog->fill($request->only(['breed_name', 'size', 'hair_color']));
        $dog->save();

        return response()->json(['message' => 'Dog updated successfully', 'dog' => $dog], 200);
    }
}
