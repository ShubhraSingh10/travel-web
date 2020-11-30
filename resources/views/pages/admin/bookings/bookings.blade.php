@extends('layouts.app')
@section('content')
<div class="container" style="margin-top:50px">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <h5 class="card-title">Bookings</h5>
                        </div>
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Hotel Name</th>
                                <th>Booked By</th>
                                <th>Room(s)</th>
                                <th>Guest(s)</th>
                                <th>Checkin</th>
                                <th>Checkout</th>
                                <th>Time</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (App\Models\Booking::all() as $booking)
                            <tr>
                                <td>{{$booking->hotel->name}}</td>
                                <td>{{$booking->user->name}}</td>
                                <td>{{$booking->no_room}}</td>
                                <td>{{$booking->no_guest}}</td>
                                <td>{{$booking->checkin_date->format('d-m-Y')}} {{$booking->checkinTimeFormated()}}</td>
                                <td>{{$booking->checkout_date->format('d-m-Y')}} {{$booking->checkoutTimeFormated()}}</td>
                                <td>{{$booking->created_at->diffForHumans()}}</td>
                                <td>
                                <a href="{{route('admin.bookings.edit', $booking->id)}}" class="btn btn-sm btn-warning"><i class="far fa-edit"></i></a>
                                <a href="{{route('admin.bookings.delete', $booking->id)}}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection