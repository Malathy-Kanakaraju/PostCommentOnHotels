@extends('layouts.app')

@section('content')

<h2>Hotel Details</h2>
<div> {{$hotel->name}} is located at {{$hotel->location}}</div>

<ul>
    @foreach($hotel->comments as $comment)
    <li>{{$comment->comment_txt}}</li>
    @endforeach
</ul>

<!--Form to get comments as input from user and store it against this hotel -->
<hr>
<h3>Post your comment</h3>
<div>
    <form method="POST" action="/hotels/{{$hotel->id}}/comments">
        <textarea rows="5" cols="20" name="comment_txt"></textarea><br>
        <button type="submit">Post Comment</button>
    </form>
</div>
@endsection