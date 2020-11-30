@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-sm-6">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Login for Exclusive Offer</h5>
                <form method='POST'>
                    @csrf 
                    @if (isset($loginFailed))
                    <div class="alert alert-danger" role="alert">
                        Invalid email or password.
                    </div>
                    @endif
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" name="email" value="{{old('email')}}">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form> 
            </div>
        </div>
    </div>
</div>
@endsection