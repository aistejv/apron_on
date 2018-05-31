@extends('layout.master')

@section('content')

  <section id="recipe">
    <div class="container">
      <div class="row">
        <!-- Title -->
        <div class="col-12">
          <h2>{{$recipe->title}}</h2>
        </div>
      </div>
      <div class="row vertical-align">
        <div class="col-12">
          <!-- Picture -->
          <div class="col-md-8 pull-left wow swing">
            <img src="{{$recipe->image_url}}" alt="bbq-pork-ribs" class="recipe-picture" />
          </div>
          <!-- Info -->
          <div class="col-md-4 pull-right wow lightSpeedIn">
            <div class="recipe-info">
              <h3>Info</h3>
              <!-- Time -->
              <div class="row">
                <div class="col-2 text-center">
                  <i class="fa fa-clock-o" aria-hidden="true"></i>
                </div>
                <div class="col-6">Time</div>
                <div class="col-4">{{$recipe->time}} mins</div>
              </div>
              <!-- Difficulty -->
              <div class="row">
                <div class="col-2 text-center">
                  <i class="fa fa-area-chart" aria-hidden="true"></i>
                </div>
                <div class="col-6">Difficulty</div>
                <div class="col-4">
                  @if ($recipe->difficulty == 1)
                    <i class="fa fa-star" aria-hidden="true"></i>
                  @elseif($recipe->difficulty == 2)
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                  @elseif($recipe->difficulty == 3)
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                  @elseif($recipe->difficulty == 4)
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                  @else
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                  @endif
                </div>
              </div>
              <!-- Serves -->
              <div class="row">
                <div class="col-2 text-center">
                  <i class="fa fa-users" aria-hidden="true"></i>
                </div>
                <div class="col-6">Servings</div>
                <div class="col-4">{{$recipe->servings}}</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Ingredients -->
      <div class="row wow slideInUp">
        <div class="col-12">
          <div class="recipe-ingredients">
            <h3>Ingredients</h3>
            <dl class="ingredients-list">

              @foreach($recipe->ingredients as $ingredient)
              <dt>{{$ingredient->amount}} {{$ingredient->measurement}}</dt> <dd>{{$ingredient->ingredient->name}}</dd>
              @endforeach
            </dl>
          </div>
        </div>
      </div>
      <!-- Directions -->
      <div class="row wow slideInUp">
        <div class="col-12">
          <div class="recipe-directions">
            <h3>Directions</h3>
            <ol>
              @foreach($recipe->steps as $step)
                <li>{{$step->description}}</li>
              @endforeach
            </ol>
          </div>
        </div>
      </div>
      <!-- Back to recipes -->
      <div class="row">
        <div class="col-12 text-center">
          <a href="{{route('home')}}">
            <i class="fa fa-backward" aria-hidden="true"></i>
            Go to back to recipes.
          </a>
        </div>
      </div>
    </div>
  </section>



@endsection
