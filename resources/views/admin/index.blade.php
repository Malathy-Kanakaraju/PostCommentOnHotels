@extends('layouts.app')

@section('content')

<h2>List of all hotels</h2>

<ul>
@foreach($hotels as $hotel)

    <li>{{$hotel->name}} @ {{$hotel->location}}</li>

@endforeach

</ul>
@endsection