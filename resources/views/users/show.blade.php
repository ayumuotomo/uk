@extends('layouts.app')

@section('content')

<div class="clearfix"></div>

<div class='container-fluid'>
        <aside class="col-xs-4">
            <div class="panel panel-default">
               <!--<div class="box18">-->
                    <!--<div class="panel-heading">-->
                        <h1 class="panel-title"><p><div class="section-subheading text-muted">{{ $user->name }}</p></h1>
                        </div>
                    <!--</div>-->
                <!--</div>-->
            </div>
        </aside>
        
<div class="clearfix"></div>
        
    
        <div class="col-md-10">
            <ul class="nav nav-tabs">
                    
                
                <div class="col-md-6">
                    <li role="presentation" class="{{ Request::is('users/' . $user->id) ? 'active' : '' }}"><a href="{{ route('users.show', ['id' => $user->id]) }}" class="text-black"><h3>History <span class="badge">{{ $count_posts }}</h3></span></a></li>
                </div>
                
                <div class="col-md-6">
                <li role="presentation" class="{{ Request::is('users/*/favorites') ? 'active' : '' }}"><a href="{{ route('users.favorites', ['id' => $user->id]) }}" class="text-black"><h3>Favorites <span class="badge">{{ $count_favorites }}</h3></span></a></li>
                </div>
            </ul>     
            
<div class="clearfix"></div>

@include('posts.posts')

        </div>
</div>
@endsection