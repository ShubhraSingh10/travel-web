@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
  <div class="col-sm-6">
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Add Hotel</h5>
        <form method="POST">
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
          <button type="submit" class="btn btn-primary">Add</button>
        </form> 
      </div>
    </div>
  </div>
</div>
@endsection