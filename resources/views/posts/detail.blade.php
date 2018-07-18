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
          
             
                   <br>
                   <div class="text-muted">BY <h3>{!! nl2br($user->name) !!}   </h3> </fiv>
            
      
      <div class="col-md-6"></div>
      
      
               <div class="text-right">
               <span class="text-muted">posted at {{ $post->created_at }}</span>
               </div>
               
               <br>
               <br>
               <br>
               <br>
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