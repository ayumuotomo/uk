@extends('layouts.app')

<ul class="media-list">
@foreach ($posts as $post)
    <?php $user = $post->user; ?>
    <li class="media">
        <div class="media-body">
           
           <div class="col-md-6">
           <div class="well">
          <div style="display:inline-flex">
            <div class="text-left">
                <h3>{!! nl2br(e($post->title)) !!}</h3> 
            </div>
            
            &nbsp;&nbsp;
            
               <div class="text-center">
                <h3>{!! nl2br(e($post->subject)) !!}</h3>　
               </div>
            </div>
            </div>
            </div>
            
                 
                 <div>
               <span class="text-muted">posted at {{ $post->created_at }}</span>
                </div>
            
           <div style="display:inline-flex">
               @include('post_favorite.favorite_button', ['user' => $user])     
                
           
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

 <!-- 詳細を表示するコード
            
               <div>
                <h2>{!! nl2br(e($post->detail)) !!}</h2>
            </div>
                </div> -->