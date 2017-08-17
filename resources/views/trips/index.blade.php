@extends('layouts.app')

@section('content')

    <ul>

    @foreach($trips as $trip)

    <a href="{{route('trip.show', $trip->id )}}">
    <li>{{$trip->trip_day}}</li>
    <li>{{$trip->seat_price}} $</li>
    <li>{{$trip->seats_number}} Seats</li>
    <li>{{$trip->from}}-{{$trip->to}}</li>
    <li>{{$trip->start_date }}-{{$trip->arrive_date}}</li>
        <br><br>

    </a>
    @endforeach

    </ul>

@endsection