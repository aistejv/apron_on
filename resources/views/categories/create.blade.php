@extends('layout.master')

@section('content')
<section id="allRecipes">
  <div class="container">
    <div class="row">
      <div class="col-8">
      <form method="POST" action="{{route('store.category')}}">
           @csrf
          <div class="form-group ">
            <label for="title">Title</label>
            <input type="text" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" id="title" name="title" placeholder="Enter title of a new category" value="{{old('title')}}">
            @if ($errors->has('title'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
            @endif
          </div>

          <button class="btn btn-outline-light" href="#" role="button" name="submit">Add a new category</button>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection
