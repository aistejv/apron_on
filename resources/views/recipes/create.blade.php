@extends('layout.master')

@section('content')
  <section id="allRecipes">
    <div class="container">
      <div class="row">
        <div class="col-8">

<form method="POST" action="">
     @csrf
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" id="title" name="title" placeholder="Title of the recipe" value="{{old('title')}}">
      @if ($errors->has('title'))
          <span class="invalid-feedback">
              <strong>{{ $errors->first('title') }}</strong>
          </span>
      @endif
    </div>
    <div class="form-group">
      <label for="category">Category</label>
      <select id="category" class="form-control {{ $errors->has('category_id') ? ' is-invalid' : '' }}" name="category_id">
        <option value="">Choose...</option>
        @foreach($categories as $category)
          <option  value="{{$category->id}}"
            {{old('category_id') == $category->id ? 'selected' : ''}}>{{$category->title}}</option>
          @endforeach
        </select>
        @if ($errors->has('category_id'))
          <span class="invalid-feedback">
            <strong>{{ $errors->first('category_id') }}</strong>
          </span>
        @endif
      </div>

      <div class="form-group">
        <label for="image">Photo of the recipe</label>
        <input type="text" name="image_url" class="form-control {{ $errors->has('image_url') ? ' is-invalid' : '' }}" id="image" placeholder="Image url" value="{{old('image_url')}}">
        @if ($errors->has('image_url'))
          <span class="invalid-feedback">
            <strong>{{ $errors->first('image_url') }}</strong>
          </span>
        @endif
      </div>

      <div class="form-group">
        <label for="time">Time</label>
        <input type="number" class="form-control {{ $errors->has('time') ? ' is-invalid' : '' }}" id="time" name="time" placeholder="Time" value="{{old('time')}}">
        @if ($errors->has('time'))
          <span class="invalid-feedback">
            <strong>{{ $errors->first('time') }}</strong>
          </span>
        @endif
      </div>

      <div class="form-group">
        <label for="servings">Number of servings</label>
        <input type="number" class="form-control {{ $errors->has('servings') ? ' is-invalid' : '' }}" id="servings" name="servings" placeholder="Servings" value="{{old('servings')}}">
        @if ($errors->has('servings'))
          <span class="invalid-feedback">
            <strong>{{ $errors->first('servings') }}</strong>
          </span>
        @endif
      </div>

      <div class="form-group">
        <label for="difficulty">Difficulty</label>
        <select id="difficulty" class="form-control {{ $errors->has('difficulty') ? ' is-invalid' : '' }}" name="difficulty">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          </select>
          @if ($errors->has('difficulty'))
            <span class="invalid-feedback">
              <strong>{{ $errors->first('difficulty') }}</strong>
            </span>
          @endif
        </div>

    <div class="form-group">
      <label for="description">Steps</label>
      <input type="text" class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" id="description" placeholder="Steps" value="{{old('description')}}">
      @if ($errors->has('description'))
          <span class="invalid-feedback">
              <strong>{{ $errors->first('description') }}</strong>
          </span>
      @endif
    </div>

    <div class="form-group">
      <label for="ingredients">Ingredients</label>
      <select id="ingredients" class="form-control {{ $errors->has('ingredient_id') ? ' is-invalid' : '' }}" name="ingredients">
        <option value="">Choose...</option>
        @foreach($ingredients as $ingredient)
        <option  value="{{$ingredient->id}}"
           {{old('ingredient_id') == $ingredient->id ? 'selected' : ''}}>{{$ingredient->name}}</option>
        @endforeach
      </select>
      @if ($errors->has('ingredient_id'))
          <span class="invalid-feedback">
              <strong>{{ $errors->first('ingredient_id') }}</strong>
          </span>
      @endif
    </div>



    <button class="btn btn-primary btn-sm" href="#" role="button" name="submit">Add new recipe</button>
  </form>
</div>
</div>
</div>
</section>
@endsection
