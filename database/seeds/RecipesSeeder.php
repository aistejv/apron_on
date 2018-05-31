<?php

use App\Recipe;
use App\Category;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class RecipesSeeder extends Seeder
{
  protected $recipe;
  protected $category;
  protected $faker;

  public function __construct(Recipe $recipe, Category $category, Faker $faker){
    $this->recipe = $recipe;
    $this->category = $category;
    $this->faker = $faker;
  }

  public function run()
  {
    $category_id = $this->category->pluck('id');
    $faker = $this->faker->create();
    foreach(range(1,20) as $index){
      $this->recipe->create([
        'title' => $faker->word(),
        'category_id' => $category_id->random(),
        'image_url' => $faker->imageUrl(640, 378, 'food'),
        'time' => $faker->numberBetween(30, 240),
        'servings' => $faker->numberBetween(2, 24),
        'difficulty' => $faker->numberBetween(1, 5),
      ]);
    }
}

}
