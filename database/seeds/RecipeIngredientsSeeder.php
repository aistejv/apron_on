<?php
use App\Recipe;
use App\Ingredient;
use App\RecipeIngredient;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class RecipeIngredientsSeeder extends Seeder
{
  protected $recipe;
  protected $recipe_ingredient;
  protected $ingredient;
  protected $faker;

  public function __construct(Recipe $recipe, Ingredient $ingredient, RecipeIngredient $recipe_ingredient, Faker $faker){
    $this->recipe = $recipe;
    $this->recipe_ingredient = $recipe_ingredient;
    $this->ingredient = $ingredient;
    $this->faker = $faker;
  }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $recipe_id = $this->recipe->pluck('id');
      $ingredient_id = $this->ingredient->pluck('id');
      $faker = $this->faker->create();
      foreach(range(1,200) as $index){
        $this->recipe_ingredient->create([
          'recipe_id' => $recipe_id->random(),
          'ingredient_id' => $ingredient_id->random(),
          'amount' => $faker->numberBetween(1, 50),
          'measurement' => $faker->randomElement($array = array ('g','kg','ml','l', 'cup')),
        ]);
      }
    }
}
