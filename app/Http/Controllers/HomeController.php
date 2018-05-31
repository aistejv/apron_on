<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;
use App\Category;
use App\RecipeIngredient;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $categories = Category::all();
      $new = Recipe::latest()->take(9)->get();
      $recipe_ingredient = RecipeIngredient::all();
        return view('welcome', compact('categories','new', 'recipe_ingredient'));

    }

    public function breakfast(){
      $recipes = Recipe::all()->where('category_id', 1);
        return view('recipes.breakfast', compact('recipes'));
    }
    public function meat(){
      $recipes = Recipe::all()->where('category_id', 2);
        return view('recipes.meat', compact('recipes'));
    }
    public function seafood(){
      $recipes = Recipe::all()->where('category_id', 3);
        return view('recipes.seafood', compact('recipes'));
    }
    public function snacks(){
      $recipes = Recipe::all()->where('category_id', 4);
        return view('recipes.snacks', compact('recipes'));
    }
    public function desserts(){
      $recipes = Recipe::all()->where('category_id', 5);
        return view('recipes.desserts', compact('recipes'));
    }
    public function vegetarian(){
      $recipes = Recipe::all()->where('category_id', 6);
        return view('recipes.vegetarian', compact('recipes'));
    }

    public function search(Request $request){
    $search = $request->input('search');

    $result = Recipe::where('title', 'LIKE', '%' . $request .'%')->get();


      dd($result);
      return view('recipes.search', compact('result'));

      }
}
