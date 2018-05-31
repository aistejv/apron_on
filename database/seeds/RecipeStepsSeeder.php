<?php
use App\Recipe;
use App\RecipeStep;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class RecipeStepsSeeder extends Seeder
{
  protected $recipe;
  protected $recipe_step;
  protected $faker;

  public function __construct(Recipe $recipe, RecipeStep $recipe_step, Faker $faker){
    $this->recipe = $recipe;
    $this->recipe_step = $recipe_step;
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
      $faker = $this->faker->create();
      foreach(range(1,200) as $index){
        $this->recipe_step->create([
          'description' => $faker->realText(20,2),
          'recipe_id' => $recipe_id->random(),
        ]);
      }
    }
}
