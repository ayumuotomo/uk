@extends('layouts.app')

<ul class="media-list">

    <?php $user = $post->user; ?>
    <li class="media">
        <div class="media-body">
            <div>
               <span class="text-muted">posted at {{ $post->created_at }}</span>
            </div>
           
            <div>
               <p>{!! nl2br(e($post->title)) !!}　&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;　{!! nl2br(e($post->subject)) !!}</p>
            </div>
            
            <div>
                <p>{!! nl2br(e($post->detail)) !!}</p>
            </div>
            
            <div>
                <p>By {!! nl2br($user->name) !!}</p>
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
