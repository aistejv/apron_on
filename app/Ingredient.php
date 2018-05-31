<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $fillable =['name'];

    public function ingredients(){
      return $this->belongsTo(RecipeIngredient::class);
    }
    public function recipe_ingredients(){
      return $this->belongsTo(Recipe::class);
    }
}
