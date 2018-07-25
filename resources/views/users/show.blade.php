@extends('layouts.app')

@section('content')
<div class="split-box left-box">
        <div class="history">
            <h2>Your<br>history</h2>
            <a href="{{ route('users.history', Auth::id()) }}">GO</a>
        </div>
</div>
<div class="split-box right-box">
     <div class="like">
	    <h2>Your<br>favorites</h2>
	    <a href="{{ route('users.like', Auth::id()) }}">GO</a>
	 </div>
</div>

@endsection