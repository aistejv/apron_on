<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    protected $category;

    public function __construct(Category $category){
      $this->category = $category;
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->category->create([
        'title' => 'Breakfast'
      ]);
      $this->category->create([
        'title' => 'Meat'
      ]);
      $this->category->create([
        'title' => 'Seafood'
      ]);
      $this->category->create([
        'title' => 'Snacks'
      ]);
      $this->category->create([
        'title' => 'Desserts'
      ]);
      $this->category->create([
        'title' => 'Vegetarian'
      ]);
    }
}
