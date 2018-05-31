<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable =['title', 'image_url', 'time', 'servings', 'difficulty'];


    public function category(){
      return $this->belongsTo('App\Category');
    }

    public function steps(){
      return $this->hasMany(RecipeStep::class);
    }

    public function ingredients(){
      return $this->hasMany(RecipeIngredient::class);
    }

}
