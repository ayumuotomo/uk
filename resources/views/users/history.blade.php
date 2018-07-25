@extends('layouts.app')

@section('content')
<div  id="show">
        <div class="row">
            <div class="col-md-12">
             　<h1  class="text-center"><span class="text-danger"> {{ $user->name }}</span></h1>
            </div>
            
            <div class="col-md-12">
                <h1><p class="text-center">History<span class="badge">{{ $count_posts }}</span></p></h1>
            </div>
        </div>
       <h2><a href="{{ route('users.show', Auth::id()) }}" class="header-nav-link header-nav-sub-link">back</a></h2> 
         <div class="row">
            
            @if (count($posts) > 0)
                @include('posts.posts', ['posts' => $posts])
            @endif
           
       </div>

@endsection