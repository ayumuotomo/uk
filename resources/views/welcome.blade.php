@extends('layouts.app')

@section('content')
   
         <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Your interests lead to new relationships</div>
          <div class="intro-heading text-uppercase">It's Nice To Meet You</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
        </div>
      </div>
    </header>
        
        
        <div class="cover">
             <div class="cover-inner">
                <h1>Your interests lead to new relationships</h1>
               <a href="{{ route('signup.get') }}" class="btn btn-success btn-lg">Start The U.K.</a>
          
               <a href="{{ route('login') }}" class="btn btn-success btn-lg">Login</a>
               
            </div>
        </div>

@endsection

                        
               