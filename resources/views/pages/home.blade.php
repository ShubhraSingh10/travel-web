@extends('layouts.app')
@section('content')
<div class="container" style="margin-top:50px">
    <div class="row">
        @foreach (App\Models\Hotel::all() as $hotel)
        <div class="col-sm-3">
            <div class="card">
                <img class="card-img-top" src="{{Storage::url($hotel->images[0])}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$hotel->name}}</h5>
                    <p style="font-size: 12px;color: #565656;margin-bottom:1px"><i class="fas fa-hotel"></i>&nbsp;{{$hotel->category}}&nbsp;&nbsp;&nbsp;<i class="fas fa-map-marker-alt"></i>&nbsp;{{$hotel->city}}</p>
                    <p class="card-text" style="margin-bottom:5px">{{$hotel->description}}</p>
                    <div style="margin-bottom:10px">
                        @if ($hotel->ac==="1") <span class="badge badge-dark"><i class="fas fa-wind"></i>&nbsp;AC &nbsp;</span> @endif
                        @if ($hotel->tv==="1") <span class="badge badge-dark"><i class="fas fa-tv"></i>&nbsp;TV &nbsp;</span> @endif
                        @if ($hotel->wifi==="1") <span class="badge badge-dark"><i class="fas fa-wifi"></i>&nbsp;WIFI &nbsp;</span> @endif
                    </div>
                    <a href="{{route('checkin')}}?hotel={{$hotel->id}}" class="btn btn-primary">Book</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection