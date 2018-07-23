@extends('layouts.app')

@section('content')

<br><br><br>

         <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Your interests lead to new relationships!</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="{{ route('signup.get') }}">Sign Up</a>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="{{ route('login') }}">Log In</a>
        </div>
      </div>
    </header>
        
        

@endsection

                        
               