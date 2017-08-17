@extends('layouts.app')

@section('content')


    {!! Form::open(['action' => ['TripController@update', $trip->id],  'method' => 'put']) !!}

    {!! Form::label('Trip Day') !!}
    {!! Form::date('trip_day')!!}<br><br>

    {!! Form::label('The Price') !!}
    {!! Form::number('seat_price') !!}<br><br>

    {!! Form::label('Seats Number') !!}
    {!! Form::number('seats_number') !!}<br><br>

    {!! Form::label('From') !!}
    {!! Form::select('from', array('Karbala' => 'Karbala', 'Baghdad' => 'Baghdad', 'Basra' => 'Basra')) !!}<br><br>

    {!! Form::label('To') !!}
    {!! Form::select('to', array('Karbala' => 'Karbala', 'Baghdad' => 'Baghdad', 'Basra' => 'Basra')) !!}<br><br>

    {!! Form::label('start Time') !!}
    {!! Form::time('start_date')!!}<br><br>


    {!! Form::label('Arrive Time') !!}
    {!! Form::time('arrive_date') !!}<br><br>


    {!! Form::submit('Edit THE TRIP') !!}
    {!! Form::close() !!}


    {!! Form::open(['action' => ['TripController@destroy', $trip->id],  'method' => 'delete']) !!}

    {!! Form::submit('DELETE THE TRIP') !!}

    {!! Form::close() !!}

@endsection