<br>
<br>
<br>
<br>

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
    <div class="col-lg-12 text-center">
    <div class="panel panel-default">
        
    <ul class="media-list">

    <?php $user = $post->user; ?>
    <li class="media">
        <div class="media-body">
            
            <br>
            <br>
            <br>
            
        <ul class="offset-3 col-md-6" "list-group">
            
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
    <br>
    
        <ul class="timeline">       
          <li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>
            BY {!! nl2br($user->name) !!}</h4>
            </div>
            </li>
            </ul>
            
             <div class="pull-center">  
            @include('post_favorite.favorite_button', ['user' => $user])     
            </div>
            </div>
     
               <div class="text-right">
               <span class="text-muted">posted at {{ $post->created_at }}</span>
               </div>
               
               <br>
               <br>
            
           
           
           
             
        </div>
    </li>

</ul>
@endsection