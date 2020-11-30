@extends('layouts.app')
@section('content')
<div class="container" style="margin-top:50px">
  <div class="row justify-content-center">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Edit Booking</h5>
          @php
          $no_room = old('no_room') === null ? $booking->no_room : old('no_room');
          $no_guest = old('no_guest') === null ? $booking->no_guest : old('no_guest');
          $checkin_date = old('checkin_date') === null ? $booking->checkin_date->format('Y-m-d') : old('checkin_date');
          $checkin_time = old('checkin_time') === null ? $booking->checkin_time : old('checkin_time');
          $checkout_date = old('checkout_date') === null ? $booking->checkout_date->format('Y-m-d') : old('checkout_date');
          $checkout_time = old('checkout_time') === null ? $booking->checkout_time : old('checkout_time');
          @endphp
          <form method="POST">
            @csrf
            <div class="form-group">
              <label for="name">Rooms</label>
              <input type="number" class="form-control @error('no_room')is-invalid @enderror" name="no_room" aria-describedby="no_room" value="{{$no_room}}">
              @error('no_room')
              <p class="invalid-feedback">{{$message}}</p>
              @enderror
            </div>  
            <div class="form-group">
              <label for="name">Guest</label>
              <input type="number" class="form-control @error('no_guest')is-invalid @enderror" name="no_guest" aria-describedby="no_guest" value="{{$no_guest}}">
              @error('no_guest')
              <p class="invalid-feedback">{{$message}}</p>
              @enderror
            </div>  
            <div class="form-group">
              <label for="exampleInputEmail1">Checkin Date</label>
              <input type="date" class="form-control" name="checkin_date" value="{{$checkin_date}}">
              @error('checkin_date')
              <p class="invalid-feedback">{{$message}}</p>
              @enderror
            </div>
            
            <div class="form-group">
              <label for="exampleInputEmail1">Checkin Time</label>
              <input type="time" class="form-control" name="checkin_time" value="{{$checkin_time}}">
              @error('checkin_time')
              <p class="invalid-feedback">{{$message}}</p>
              @enderror
            </div>
            
            <div class="form-group">
              <label for="exampleInputEmail1">Checkout Date</label>
              <input type="date" class="form-control" name="checkout_date" value="{{$checkout_date}}">
              @error('checkout_date')
              <p class="invalid-feedback">{{$message}}</p>
              @enderror
            </div>
            
            <div class="form-group">
              <label for="exampleInputEmail1">Checkout Time</label>
              <input type="time" class="form-control" name="checkout_time" value="{{$checkout_time}}">
              @error('checkout_time')
              <p class="invalid-feedback">{{$message}}</p>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary">Save Now</button>
          </form> 
        </div>
      </div>
    </div>
  </div>
</div>
@endsection