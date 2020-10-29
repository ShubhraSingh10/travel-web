@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
  <div class="col-sm-6">
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Register</h5>
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
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control @error('email')is-invalid @enderror" name="email" aria-describedby="emailHelp" value="{{old('email')}}">
            @error('email')
            <p class="invalid-feedback">{{$message}}</p>
            @enderror
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control @error('password')is-invalid @enderror" name="password" value="{{old('password')}}">
            @error('password')
            <p class="invalid-feedback">{{$message}}</p>
            @enderror
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" name="term" id="term">
            <label class="form-check-label" for="term">I agree to the Terms and Conditions</label>
          </div>
          @error('term')
          <p class="invalid-feedback">{{$message}}</p>
          @enderror
          <button type="submit" class="btn btn-primary">Submit</button>
        </form> 
      </div>
    </div>
  </div>
</div>
@endsection