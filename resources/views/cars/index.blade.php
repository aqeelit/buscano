@extends('layouts.app')

@section('content')

    <ul>

        @foreach($cars as $car)

            <a href="{{route('car.show', $car->id )}}">
                <li>{{$car->car_number}}</li>
                <li>{{$car->car_model}} $</li>
                <li>{{$car->car_number}} Seats</li>
                <li>{{$car->seats_number}}</li>

                <br><br>

            </a>
        @endforeach

    </ul>

@endsection