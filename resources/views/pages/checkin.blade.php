@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            @foreach ($hotel->images as $image)
            <li data-target="#demo" data-slide-to="{{$loop->index}}" class="{{$loop->index==0?"active":""}}"></li>
            @endforeach
        </ul>
        <div class="carousel-inner">
            @foreach ($hotel->images as $image)
            <div class="carousel-item {{$loop->index==0?"active":""}}" style="width: 100%;height: 320px">
                <img src="{{Storage::url($image)}}" alt="Los Angeles" style="object-fit: cover; width: 100%; height: 100%;">
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
        
    </div>
</div>
<div class="container" style="margin-top:50px">
    <div class="row">
        <div class="col-sm-9">
            <h1>{{$hotel->name}}</h1>
            <p style="color: #565656;margin-bottom:1px;margin-left:5px"><i class="fas fa-hotel"></i>&nbsp;{{$hotel->category}}&nbsp;&nbsp;&nbsp;<i class="fas fa-map-marker-alt"></i>&nbsp;{{$hotel->city}}</p>
            <div class="card" style="margin-top:50px">
                <div class="card-body">
                    <h5 class="card-title">Description</h5>
                    <p>{{$hotel->description}}</p>
                    <div style="margin-bottom:10px">
                        @if ($hotel->ac==="1") <span class="badge badge-dark"><i class="fas fa-wind"></i>&nbsp;AC &nbsp;</span> @endif
                        @if ($hotel->tv==="1") <span class="badge badge-dark"><i class="fas fa-tv"></i>&nbsp;TV &nbsp;</span> @endif
                        @if ($hotel->wifi==="1") <span class="badge badge-dark"><i class="fas fa-wifi"></i>&nbsp;WIFI &nbsp;</span> @endif
                    </div>
                </div>
            </div>
            <div class="card" style="margin-top:50px">
                <div class="card-body">
                    <h5 class="card-title">Booking Details</h5>
                    <form method="POST">
                        @csrf
                        <input type="hidden" name="hotel_id" value="{{$hotel->id}}" />
                        <div class="form-group">
                            <label for="email">Number of Guest</label>
                            <input type="number" class="form-control" value='1' name='no_guest' id="no_guest">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Number of room</label>
                            <input type="number" class="form-control" value='1' name='no_room' id="no_room">
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="pwd">Checkin Date</label>
                                <input type="date" class="form-control" name='checkin_date' id="checkin_date">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Checkin Time</label>
                                <input type="time" class="form-control" name='checkin_time' id="checkin_time">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Checkout Date</label>
                                <input type="date" class="form-control" name='checkout_date' id="checkout_date">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Checkout Time</label>
                                <input type="time" class="form-control" name='checkout_time' id="checkout_time">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total</h5>
                    <button class="btn btn-success">Book Now</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection