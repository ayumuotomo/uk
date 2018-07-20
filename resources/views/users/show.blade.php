@extends('layouts.app')

@section('content')

<br>
<br>
<br>
<br>
<br>

<div class='container-fluid'>
    <div class="row">
        <aside class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title"><p class="font-italic">{{ $user->name }}</p></h1>
                </div>
                <div class="panel-body">
                   <img src='img/team/f00936.jpg' class='img-responsive'>
                
                <!--    <img class="media-object img-rounded img-responsive" src="{{ Gravatar::src($user->email, 200) }}" alt=""> -->
                </div>
            </div>
        </aside>
        
<br>
<br>
<br>
<br>
        
        <div class="col-md-9">
            <ul class="nav nav-tabs">
                
                <div class="col-md-7">
                    <li role="presentation" class="{{ Request::is('users/' . $user->id) ? 'active' : '' }}"><a href="{{ route('users.show', ['id' => $user->id]) }}" class="text-info">History <span class="badge">{{ $count_posts }}</span></a></li>
                </div>
                
                <div class="col-md-4">
                <li role="presentation" class="{{ Request::is('users/*/favorites') ? 'active' : '' }}"><a href="{{ route('users.favorites', ['id' => $user->id]) }}" class="text-success">Favorites <span class="badge">{{ $count_favorites }}</span></a></li>
                </div>
            </ul>
            
            
            @if (count($posts) > 0)
                @include('posts.posts', ['posts' => $posts])
            @endif
        </div>
    </div>

</div>
    
@endsection