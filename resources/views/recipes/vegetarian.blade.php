@extends('layout.master')

@section('content')
  <section id="allRecipes">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2>Vegetarian recipes!</h2>
        </div>
      </div>
      <div class="row">
        <!-- First recipe item -->
        @foreach($recipes as $recipe)
        <div class="col-lg-4 col-md-6 col-sm-12 wow fadeIn">
          <div class="recipe-item text-center">
            <a href="{{route('one.recipe', $recipe->id)}}">
              <img src="{{$recipe->image_url}}" alt="bbq-pork-ribs" />
            <br />
            <h3>{{$recipe->title}}</h3>
          </div>
        </a>
        </div>
      @endforeach

  </div>
  {{-- {{ $recipes->links() }} --}}
  </div>
  </section>

@endsection
