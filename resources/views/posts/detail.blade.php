@extends('layouts.app')


@section('content')
<ul class="media-list">

    <?php $user = $post->user; ?>
    <li class="media">
        <div class="media-body">
            
            <br>
            <br>
            <br>
            
        <ul class="list-group">
            
               <div class="text-muted">TITLE</div>
               <li class="list-group-item"> {!! nl2br(e($post->title)) !!}</li>  
    <br>           
               <div class="text-muted">CONTENTS</div>
            　 <li class="list-group-item"> {!! nl2br(e($post->subject))!!}</li>
    <br>
               <div class="text-muted">DETAILS</div>
            　 <li class="list-group-item">{!! nl2br(e($post->detail)) !!}</li> <br>
      
        </ul>
            
            <div class="col-md-5">
            <div class="alert alert-info" role="alert">BY {!! nl2br($user->name) !!}</div>
            </div>
      
      <div class="col-md-6"></div>
      
      
               <div class="text-right">
               <span class="text-muted">posted at {{ $post->created_at }}</span>
               </div>
               
               <br>
               <br>
            
            <div class="pull-left">  
            @include('post_favorite.favorite_button', ['user' => $user])     
            </div>
           
                
            <div>
                @if (Auth::user()->id == $post->user_id)
                    {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                    {!! Form::close() !!}
                @endif
            </div>
            
            
             
        </div>
    </li>

</ul>
@endsection