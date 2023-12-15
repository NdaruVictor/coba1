<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();

        return view('landing.recipe.index', compact('posts'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::with('recipes')->findOrFail($id);

        return view('landing.recipe.show', compact('post'));
    }

}
