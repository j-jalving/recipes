<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Recipe;

class RecipesController extends Controller
{
    /**
     *
     * Create a new Controller instance.
     *
     * @return void
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     *
     * Show all recipes.
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function index()
    {
        $recipes = Recipe::all();

        return view('recipes.index', compact('recipes'));
    }

    /**
     *
     * Show single recipe.
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function show(Recipe $recipe)
    {
        return view('recipes.show', compact('recipe'));
    }

}
