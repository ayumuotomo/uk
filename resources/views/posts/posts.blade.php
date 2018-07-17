@extends('layouts.app')

<ul class="media-list">
@foreach ($posts as $post)
    <?php $user = $post->user; ?>
    <li class="media">
        <div class="media-body">
           
           
            <div>
                <p>{!! nl2br(e($post->title)) !!}</p>
            </div>
            
               <div>
                <p>{!! nl2br(e($post->subject)) !!}</p>
            </div>
            
               <div>
                <p>{!! nl2br(e($post->detail)) !!}</p>
            </div>
                
                 <div>
               <span class="text-muted">posted at {{ $post->created_at }}</span>
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
@endforeach
</ul>
