@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Hotels</h5>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (App\Models\Hotel::all() as $hotel)
                            <tr>
                                <td>{{$hotel->name}}</td>
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