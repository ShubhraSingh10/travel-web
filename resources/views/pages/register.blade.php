@extends('layouts.app')
@section('content')
<div class="row1 justify-content-center" style=" padding: 20px;>
  <div class="col-sm-6 justify-content-center">
    <div class="card">
      <div class="loginbg">
        <h5 class="card-title" style="color:white;"><b><i>Register for Excluvise Offer!!!</i></b></h5>
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
            <label for="exampleInputEmail1" style="color:white;">Email address</label>
            <input type="email" class="form-control @error('email')is-invalid @enderror" name="email" aria-describedby="emailHelp" value="{{old('email')}}">
            @error('email')
            <p class="invalid-feedback">{{$message}}</p>
            @enderror
          </div>
          <div class="form-group">
            <label for="password" style="color:white;">Password</label>
            <input type="password" class="form-control @error('password')is-invalid @enderror" name="password" value="{{old('password')}}">
            @error('password')
            <p class="invalid-feedback">{{$message}}</p>
            @enderror
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" name="term" id="term">
            <label class="form-check-label" for="term" style="color:white;">I agree to the Terms and Conditions</label>
          </div>
          @error('term')
          <p class="invalid-feedback">{{$message}}</p>
          @enderror
          <button type="submit" class="btn btn-primary">Submit</button>
        </form> 
      </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  </div>
  
</div>
@endsection