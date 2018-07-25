@extends('layouts.app')
@section('content')

   
<div class="col-lg-12 text-center">


    <h5>Let's check who posted this!<br>
    If you like it, why not go talk to them tomorrow.</h5>

   
    <?php $user = $post->user; ?>
        <!--li class="media">
        <div class="media-body"-->
            
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
        <li class="list-group-item">{!! nl2br(e($post->detail)) !!}</li> 
            <br>
      
    </ul>
        
            <br>
            <br>
    
        <div id="ryohei">
        <h4>BY {!! nl2br($user->name) !!}</h4>
        </div>
            
        <div class="pull-center">
            @include('post_favorite.favorite_button', ['user' => $user])     
        </div>
                
</div>
     
<div class="text-right">
    <span class="text-muted">posted at {{ $post->created_at }}</span>
</div>

@endsection