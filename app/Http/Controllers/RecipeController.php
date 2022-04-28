<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class RecipeController extends Controller
{
    public function create() {
        return view('recipe.create');
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'title' => 'required',
            'duration' => 'required',
            'ingredients' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);
        $file = $data['image'];
        $extension = $file->getClientOriginalExtension();
        $destination = 'uploads/';
        $filename = uniqid() . '.' . $extension;
        $file->move($destination, $filename);

        $image = Image::make(public_path("uploads/{$filename}"))->fit(1200,1200);
        $image->save();


        $recipe = auth()->user()->recipes()->create($data);
        $recipe->image = $filename;
        $recipe->save();

        return redirect('/profile/' . auth()->user()->id);
    }

    public function show(\App\Models\Recipe $recipe) {
        return view('recipe.show', [
            'recipe' => $recipe,
        ]);
    }
}
