@extends('layouts.app')
@section('content')
<div class="row1 justify-content-center" style=" padding: 20px;">
    <div class="col-sm-6 justify-content-center">
        <div class="card">
            <div class="loginbg">
                <h5 class="card-title" style="color:white;"><b><i>Login for Exclusive Offer!!!</i></b></h5>
                <form method='POST'>
                    @csrf 
                    @if (isset($loginFailed))
                    <div class="alert alert-danger" role="alert">
                        Invalid email or password.
                    </div>
                    @endif
                    <div class="form-group">
                        <label for="email" style="color:white;">Email address</label>
                        <input type="email" class="form-control" name="email" value="{{old('email')}}">
                    </div>
                    <div class="form-group">
                        <label for="password" style="color:white;">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary" style="justify-content: center; align-items: center;" >Submit</button>
                </form> 
            </div>
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
@endsection