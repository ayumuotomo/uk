<br>
<br>
<br>
<br>

@extends('layouts.app')
@section('content')

<div class="container"></div>
<div class="row">
    <div class="col-lg-12 text-center">

        <div class="panel panel-default">
             
            <div class="offset-3 col-md-6" "panel-body" "row text-center"></div>
                    {!! Form::open(['route' => 'posts.store','input type' => 'hidden', 'name' => 'subcategory', 'value' => $subcategory['name']]) !!}

                    {!! Form::hidden('subcategory', $subcategory['name']) !!}
        
                <div class="offset-3 col-md-6" "form-group">
                    <label>{{ $subcategory['label']['place'] }}</label>
                            {!! Form::textarea('title', old('title'), ['class' => 'form-control', 'rows' => '2', 'placeholder' => $subcategory['placeholder']['place']]) !!}
                </div>
       
                <div class="offset-3 col-md-6" "form-group">
                    <label>{{ $subcategory['label']['title'] }}</label>
                            {!! Form::textarea('subject', old('subject'), ['class' => 'form-control', 'rows' => '2', 'placeholder' => $subcategory['placeholder']['title']]) !!}
                </div>
        
                <div class="offset-3 col-md-6" "form-group">
                    <label>Details</label>
                            {!! Form::textarea('detail', old('deatail'), ['class' => 'form-control', 'rows' => '2',  'placeholder' => 'Free space' ]) !!}
                </div>
                
                <br>
                <br>
                <br>
                

                <div class="offset-3 col-md-6" "text-right">
                            {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                </div>
                    {!! Form::close()!!}
            </div>
        </div>
    </div>
</div>

<<<<<<< HEAD
<br>
<br>
<br>
<br>
=======

>>>>>>> master

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
                         <div class="panel panel-default" >　
                            <div style="display:inline-flex">
                               
                               <div class="rounded-circle img-fluid" "panel-body">
                                   <h3>{!! nl2br(e($post->title)) !!}</h3> 
                               </div>
                            &nbsp;&nbsp;

                               <div class="rounded-circle img-fluid" "panel-body">
                                    <h3>{!! nl2br(e($post->subject)) !!}</h3>　
                                </div>
                            </div>
                            <br>
                            
                    

           <!-- <span class="text-muted">posted at {{ $post->created_at }}</span> -->
            
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
@endsection


