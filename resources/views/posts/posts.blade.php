@extends('layouts.app')

<ul class="media-list">
@foreach ($posts as $post)
    <?php $user = $post->user; ?>
    <li class="media">
        
    <div class="container">
        <div class="media-body">
           
           <table class="table table-bordered">
              <div class="row">
                   <div class="col-md-6">
                       <div class="panel panel-default">　
                            <div style="display:inline-flex">
                               <div class="panel-body">
                                   
                                    <h3>{!! nl2br(e($post->title)) !!}</h3> 
                                   
                                </div>
                            &nbsp;&nbsp;

                               <div class="panel-body">
                                    <h3>{!! nl2br(e($post->subject)) !!}</h3>　
                                </div>
                            </div>
                    </div>
            <span class="text-muted">posted at {{ $post->created_at }}</span>
           <div style="display:inline-flex">
              
                @if (Auth::user()->id == $post->user_id)
                    {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn']) !!}
                    {!! Form::close() !!}
                @endif
                
                   <a href="{{ url('posts/'.$post->id.'/show') }}">detail</a>
            </div>

               <!-- </div> -->
            <div class="col-md-6"></div>
            </div>
            
          


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