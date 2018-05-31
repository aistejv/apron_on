@extends('layout.master')

@section('content')
  <!-- Splash Screen
  ================== -->
  <div id="splash"></div>

  <!-- Website Logo
  ================= -->
  <section id="logo">
    <div class="container text-center wow pulse">
      <img src="images/apron.svg" alt="logo" />
      <br />
      <h1>Apron on! booo</h1>
    </div>
  </section>

  <!-- Recipes Categories
  ======================= -->
  <section id="categories">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2>Categories</h2>
        </div>
      </div>
      <div class="row wow zoomIn">
        <!-- Breakfast - Category Item -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
          <div class="category-item text-center">
            <img src="images/icons/milk.png" alt="milk" width="48" height="48" />
            <br />
            Breakfast
          </div>
        </div>
        <!-- Meat - Category Item -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
          <div class="category-item text-center">
            <img src="images/icons/steak.png" alt="meat" width="48" height="48" />
            <br />
            Meat
          </div>
        </div>
        <!-- Seafood - Category Item -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
          <div class="category-item text-center">
            <img src="images/icons/fish.png" alt="fish" width="48" height="48" />
            <br />
            Sea food
          </div>
        </div>
        <!-- Snacks- Category Item -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
          <div class="category-item text-center">
            <img src="images/icons/peanuts.png" alt="peanuts" width="48" height="48"/>
            <br />
            Snacks
          </div>
        </div>
        <!-- Spicy - Category Item -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
          <div class="category-item text-center">
            <img src="images/icons/chili.png" alt="chili" width="48" height="48" />
            <br />
            Spicy
          </div>
        </div>
        <!-- Vegetarian - Category Item -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
          <div class="category-item text-center">
            <img src="images/icons/vegan.png" alt="vegan" width="48" height="48" />
            <br />
            Vegetarian
          </div>
        </div>
      </div>
      <div class="row wow zoomIn">
        <div class="col-12 text-center show-all">
          <div class="category-item text-center">
            <i class="fa fa-cutlery fa-2x" aria-hidden="true"></i>
            <br />
            Show All
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Recipes Items
  ================== -->
  <section id="items">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2>Recipes</h2>
        </div>
      </div>
      <div class="row">
        <!-- First recipe item -->
        <div class="col-lg-4 col-md-6 col-sm-12 wow fadeIn">
          <div class="recipe-item text-center">
            <a href="recipe.html">
              <img src="images/bbq-pork-ribs.jpg" alt="bbq-pork-ribs" />
            </a>
            <br />
            <h3>Barbecue Pork Ribs</h3>
          </div>
        </div>
        <!-- Second recipe item -->
        <div class="col-lg-4 col-md-6 col-sm-12 wow fadeIn">
          <div class="recipe-item text-center">
            <a href="recipe.html">
              <img src="images/bbq-pork-ribs.jpg" alt="bbq-pork-ribs" />
            </a>
            <br />
            <h3>Barbecue Pork Ribs</h3>
          </div>
        </div>
        <!-- Third recipe item -->
        <div class="col-lg-4 col-md-6 col-sm-12 wow fadeIn">
          <div class="recipe-item text-center">
            <a href="recipe.html">
              <img src="images/bbq-pork-ribs.jpg" alt="bbq-pork-ribs" />
            </a>
            <br />
            <h3>Barbecue Pork Ribs</h3>
          </div>
        </div>
        <!-- Fourth recipe item -->
        <div class="col-lg-4 col-md-6 col-sm-12 wow fadeIn">
          <div class="recipe-item text-center">
            <a href="recipe.html">
              <img src="images/bbq-pork-ribs.jpg" alt="bbq-pork-ribs" />
            </a>
            <br />
            <h3>Barbecue Pork Ribs</h3>
          </div>
        </div>
        <!-- Fifth recipe item -->
        <div class="col-lg-4 col-md-6 col-sm-12 wow fadeIn">
          <div class="recipe-item text-center">
            <a href="recipe.html">
              <img src="images/bbq-pork-ribs.jpg" alt="bbq-pork-ribs" />
            </a>
            <br />
            <h3>Barbecue Pork Ribs</h3>
          </div>
        </div>
        <!-- Sixth recipe item -->
        <div class="col-lg-4 col-md-6 col-sm-12 wow fadeIn">
          <div class="recipe-item text-center">
            <a href="recipe.html">
              <img src="images/bbq-pork-ribs.jpg" alt="bbq-pork-ribs" />
            </a>
            <br />
            <h3>Barbecue Pork Ribs</h3>
          </div>
        </div>
        <!-- Seventh recipe item -->
        <div class="col-lg-4 col-md-6 col-sm-12 wow fadeIn">
          <div class="recipe-item text-center">
            <a href="recipe.html">
              <img src="images/bbq-pork-ribs.jpg" alt="bbq-pork-ribs" />
            </a>
            <br />
            <h3>Barbecue Pork Ribs</h3>
          </div>
        </div>
        <!-- Eight recipe item -->
        <div class="col-lg-4 col-md-6 col-sm-12 wow fadeIn">
          <div class="recipe-item text-center">
            <a href="recipe.html">
              <img src="images/bbq-pork-ribs.jpg" alt="bbq-pork-ribs" />
            </a>
            <br />
            <h3>Barbecue Pork Ribs</h3>
          </div>
        </div>
        <!-- Ninth recipe item -->
        <div class="col-lg-4 col-md-6 col-sm-12 wow fadeIn">
          <div class="recipe-item text-center">
            <a href="recipe.html">
              <img src="images/bbq-pork-ribs.jpg" alt="bbq-pork-ribs" />
            </a>
            <br />
            <h3>Barbecue Pork Ribs</h3>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
