@extends('layouts.app')

@section('content')
<ul class="media-list">
@foreach ($posts as $post)
    <?php $user = $post->user; ?>
    <li class="media">
    <div class="container">
        <div class="media-body">
           <div class="col-sm-2">
            <div class="row">
            <div class="col-lg-12">


            <ul class="timeline">
                <li class="timeline-inverted">
                <div class="timeline-image">
                        <a href="{{ url('posts/'.$post->id.'/show') }}" >
                            <!--<div style="display:inline-flex\">-->
                               <div class="panel-body">
                                   <h3>{!! nl2br(e($post->title)) !!}<br /> 
                                    {!! nl2br(e($post->subject)) !!}</h3>　
                                </div>
                        </a>
                </div>
                </li>
            </ul>



            <span class="text-muted">posted at {{ $post->created_at }}</span>
            
            <div　class >
              
                @if (Auth::user()->id == $post->user_id)
                    {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn']) !!}
                    {!! Form::close() !!}
                @endif
                

            </div>
            
</div>
</div>
</div>
</a>
</div>
    </li>
    @endforeach
</ul>    

    




