@extends('layout.master')

@section('content')
  <section id="allRecipes">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2>All of the categories</h2>
        </div>
      </div>
      <div class="row">
        <!-- First recipe item -->
        @foreach($categories as $category)
        <div class="col-lg-4 col-md-6 col-sm-12 wow fadeIn">
          <div class="recipe-item text-center">

            <h3>{{$category->title}}</h3>
            <form method="POST" action="{{route('category.delete', $category)}}">
              @method('DELETE')
              @csrf
              <p class="mb-0"><button type="submit" href="#" class="btn btn-outline-light btn-sm">Delete</button></p>
            </form>
          </div>
        </div>
      @endforeach

    </div>
  <div class="col-lg-4 col-md-6 col-sm-12">
  <a class="dropdown-item" href="{{route('create.category')}}" class="btn btn-outline-light">Create a new category</a>
</div>
</div>
  </section>

@endsection
