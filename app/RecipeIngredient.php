<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipeIngredient extends Model
{
  public function ingredients(){
    return $this->hasMany(Ingredient::class);
  }
  public function recipe(){
    return $this->belongsTo(Recipe::class);
  }
  public function ingredient(){
    return $this->belongsTo(Ingredient::class);
  }
}
