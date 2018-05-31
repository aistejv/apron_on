<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Recipe;
use App\RecipeIngredient;
use App\Ingredient;
use App\Category;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $recipes = Recipe::simplePaginate(15);
      return view('recipes.index', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    $categories = Category::all();
    $recipes = Recipe::all();
    $ingredients = Ingredient::all();
    return view('recipes.create', compact('categories', 'recipes', 'ingredients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Recipe::create([
        'title' => $request->input('title'),
        'category_id' => $request->input('category_id'),
        'image_url' => $request->input('image_url'),
        'time' => $request->input('time'),
        'servings' => $request->input('servings'),
        'difficulty' => $request->input('difficulty'),
      ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $recipe = Recipe::find($id);
      // dd($recipe);
        return view('recipes.recipe', compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        //
    }
}
