<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipeStep extends Model
{
  protected $fillable =['description'];

  public function recipe(){
    return $this->belongsTo(Recipe::class);
}

}
