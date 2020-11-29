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
                                <th>No. Rooms</th>
                                <th>no. Guest</th>
                                <th>Checkin_Date</th>
                                <th>Checkin_Time</th>
                                <th>Checkout_Date</th>
                                <th>Checkout_Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (App\Models\Booking::all() as $booking)
                            <tr>
                                <td>{{$booking->hotel->name}}</td>
                                <td>{{$booking->user->name}}</td>
                                <td>{{$booking->no_room}}</td>
                                <td>{{$booking->no_guest}}</td>
                                <td>{{$booking->checkin_date->format('d-m-Y')}}</td>
                                <td>{{$booking->checkinTimeFormated()}}</td>
                                <td>{{$booking->checkout_date->format('d-m-Y')}}</td>
                                <td>{{$booking->checkoutTimeFormated()}}</td>
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