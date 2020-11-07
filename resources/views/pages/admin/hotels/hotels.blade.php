@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <h5 class="card-title">Hotels</h5>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a class="btn btn-primary" href="{{route('admin.hotels.add')}}">Add Hotel</a>
                        </div>
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Photo</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (App\Models\Hotel::all() as $hotel)
                            <tr>
                                <td>
                                    {{$hotel->name}}
                                </td>
                                <td>
                                    <img src="{{Storage::url($hotel->images[0])}}" style="width: 180px;"/>
                                </td>
                                <td>{{$hotel->description}}</td>
                                <th>
                                    <a class="btn btn-warning btn-sm" href="{{route('admin.hotels.edit',$hotel->id)}}">Edit</a>
                                </th>
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