@extends('layouts.app')
@section('content')
<div class="container" style="margin-top:50px">
  <div class="row justify-content-center">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Add Hotel</h5>
          <form method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control @error('name')is-invalid @enderror" name="name" aria-describedby="name" value="{{old('name')}}">
              @error('name')
              <p class="invalid-feedback">{{$message}}</p>
              @enderror
            </div>  
            <div class="form-group">
              <label for="exampleInputEmail1">Description</label>
              <input type="description" class="form-control @error('description')is-invalid @enderror" name="description" value="{{old('description')}}">
              @error('description')
              <p class="invalid-feedback">{{$message}}</p>
              @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">City</label>
              <input type="text" class="form-control @error('city')is-invalid @enderror" name="city" value="{{old('city')}}">
              @error('city')
              <p class="invalid-feedback">{{$message}}</p>
              @enderror
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Category</label>
              <select  class="form-control @error('category')is-invalid @enderror" name="category" value="{{old('category')}}">
                <option>Hotel</option>
                <option>Motel</option>
                <option>Resort</option>
                <option>Inn</option>
                <option>Dharamshala</option>
                <option>Guest House</option>
              </select>
              @error('price')
              <p class="invalid-feedback">{{$message}}</p>
              @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Images</label>
              <input type="file" class="form-control @error('images')is-invalid @enderror" name="images[]" value="{{old('images')}}" multiple>
              @error('images')
              <p class="invalid-feedback">{{$message}}</p>
              @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Price</label>
              <input type="number" class="form-control @error('price')is-invalid @enderror" name="price" value="{{old('price')}}">
              @error('price')
              <p class="invalid-feedback">{{$message}}</p>
              @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Rating</label>
              <input type="number" class="form-control @error('rating')is-invalid @enderror" name="rating" value="{{old('rating')}}">
              @error('rating')
              <p class="invalid-feedback">{{$message}}</p>
              @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Map</label>
              <textarea class="form-control @error('map')is-invalid @enderror" name="map" value="{{old('map')}}"></textarea>
              @error('map')
              <p class="invalid-feedback">{{$message}}</p>
              @enderror
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" name='ac'>
              <label class="form-check-label" for="exampleCheck1">AC</label>
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" name='tv'>
              <label class="form-check-label" for="exampleCheck1">Television</label>
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" name='wifi'>
              <label class="form-check-label" for="exampleCheck1">Wifi</label>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
          </form> 
        </div>
      </div>
    </div>
  </div>
</div>
@endsection