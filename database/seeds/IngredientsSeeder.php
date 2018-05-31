<?php
use App\Ingredient;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class IngredientsSeeder extends Seeder
{
    protected $ingredient;
    protected $faker;

    public function __construct(Ingredient $ingredient, Faker $faker){
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
      $faker = $this->faker->create();
      foreach(range(1,200) as $index){
        $this->ingredient->create([
          'name' => $faker->word,
        ]);
      }
    }
}
