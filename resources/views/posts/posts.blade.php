@extends('layouts.app')


<ul class="media-list">
@foreach ($posts as $post)
    <?php $user = $post->user; ?>
    
         
    <li class="media">
    <div class="container">
        <div class="media-body">
           
           <div class="col-md-6">
               <table class="table table-bordered">
                             <a href="{{ url('posts/'.$post->id.'/show') }}" >
               
            <div class="row">
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
                            <br>
                            
                    

            <span class="text-muted">posted at {{ $post->created_at }}</span>
            
            <div　class = 'ramen'>
              
                @if (Auth::user()->id == $post->user_id)
                    {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn']) !!}
                    {!! Form::close() !!}
                @endif
                

            </div>
            
            
</div>
</div>
               <!-- </div> -->
            
          </div>
           </a>
</div>
    </li>
    @endforeach
</ul>    

    




