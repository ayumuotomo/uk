@extends('layouts.app')


@section('content')
<ul class="media-list">

    <?php $user = $post->user; ?>
    <li class="media">
        <div class="media-body">
            
            <br>
            <br>
            <br>
           
            <div>
               <p>{!! nl2br(e($post->title)) !!} </p>
               
               <p>{!! nl2br(e($post->subject)) !!}</p>
            
               <p>{!! nl2br(e($post->detail)) !!}</p>
          
               <p>By {!! nl2br($user->name) !!}</p>
            </div>
            
            
               <span class="text-muted">posted at {{ $post->created_at }}</span>
            
                
            @include('post_favorite.favorite_button', ['user' => $user])     
                
           
                
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