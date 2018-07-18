@extends('layouts.app')

<ul class="media-list">
@foreach ($posts as $post)
    <?php $user = $post->user; ?>
    <li class="media">
        <div class="media-body">
           
           
            <div>
                <p>{!! nl2br(e($post->title)) !!}　&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;　{!! nl2br(e($post->subject)) !!}</p> 
                <a href="{{ url('posts/'.$post->id.'/show') }}">detail</a>
                
            </div>
            
             @include('post_favorite.favorite_button', ['user' => $user])
             
             
        </div>
    </li>
    
@endforeach

</ul>