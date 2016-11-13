@extends('layouts.app')

@section('content')

<h2>List of all hotels</h2>

<ul>
@foreach($hotels as $hotel)

<li><a href="/hotels/{{$hotel->id}}">{{$hotel->name}}</a> @ {{$hotel->location}}.  Click on the hotel name to view all of comments related to that hotel</li>

@endforeach

</ul>

@endsection