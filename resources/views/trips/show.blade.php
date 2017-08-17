@extends('layouts.app')

@section('content')

    <ul>
        <li>{{$owner->owner_name}}</li>
        <li>{{$owner->licence_number}}</li>

    </ul>

    <ul>
        <li>{{$car->car_number}}</li>
        <li>{{$car->car_model}}</li>
        <li>{{$car->car_type}}</li>

    </ul>


    <ul>
    <li>{{$trip->trip_day}}</li>
    <li>{{$trip->seat_price}} $</li>
    <li>{{$trip->seats_number}} Seats</li>
    <li>{{$trip->from}}-{{$trip->to}}</li>
    <li>{{$trip->start_date }}-{{$trip->arrive_date}}</li>
    </ul>

    <a href="{{route('trip.edit', $trip->id)}}">Edit</a>
@endsection