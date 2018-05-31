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
      <h1>Apron on!</h1>
      <p>Find an inspiring recipe, put your apron on and start cooking!</p>
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
        @foreach($categories as $category)
        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
          {{-- <a class="nav-link {{$main->id == 1 ? 'active' : ''}}"> --}}
          @if($category->id <= 6)
          <a href={{route($category->title)}}>
          @else
          <a href="#">
          @endif
          <div class="category-item text-center">
            <img src="images/icons/{{$category->title}}.png" alt="image" width="48" height="48" />
            <br />
            {{$category->title}}
          </div>
        </a>
        </div>
      @endforeach

      </div>
      <div class="row wow zoomIn">
        <div class="col-12 text-center show-all">
          <a href="{{route('all.recipes')}}">
          <div class="category-item text-center">
            <i class="fa fa-cutlery fa-2x" aria-hidden="true"></i>
            <br />
            Show All
          </div>
        </a>
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
          <h2>Our new recipes!</h2>
        </div>
      </div>
      <div class="row">
        <!-- First recipe item -->
        @foreach($new as $recipe)
        <div class="col-lg-4 col-md-6 col-sm-12 wow fadeIn">
          <div class="recipe-item text-center">
            <a href="{{route('one.recipe', $recipe->id)}}">
              <img src="{{$recipe->image_url}}" alt="bbq-pork-ribs" />
            </a>
            <br />
            <h3>{{$recipe->title}}</h3>
          </div>
        </div>
      @endforeach

      </div>
    </div>
  </section>
@endsection
