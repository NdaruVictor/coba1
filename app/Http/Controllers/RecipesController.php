<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Recipe;
use Illuminate\View\View;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $recipes = Recipe::latest()->paginate(5);
        return view('recipe.index', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $posts = Post::all();
        return view('recipe.create', compact('posts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'post_id' => 'required',
            'recipe' => 'required|string',
        ]);
        //create a new
        Recipe::create([
            'post_id' => $request->post_id,
            'recipe' => $request->recipe,
        ]);
      //redirect to index
            return redirect()->route('recipes.index')->with(['success' => 'Data
            Berhasil Disimpan!']);

    }

    /**
     * Display the specified resource.
     */
    public function show(String $id): View
    {
        $recipe = Recipe::findOrFail($id);
        return view('recipe.show',compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id): View
    {
        $recipe = Recipe::findOrFail($id);
        $posts   = Post::all();

        return view('recipe.edit',compact('recipe', 'posts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recipe $recipe)
    {
         //validate form
         $this->validate($request, [
            'post_id' => 'required',
            'recipe' => 'required|string',
        ]);

            // Update the recipe
        $recipe->update([
            'post_id' => $request->post_id,
            'recipe' => $request->recipe,
        ]);

        // Redirect to the recipe show page with a success message
        return redirect()->route('recipes.index')->with(['success' => 'Data Berhasil Diperbarui!']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recipe $recipe)
    {
         // Delete the recipe
         $recipe->delete();
         // Redirect to the index page with a success message
         return redirect()->route('recipes.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

}
