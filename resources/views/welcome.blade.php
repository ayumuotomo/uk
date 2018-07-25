@extends('layouts.app')

@section('content')

         <!-- Header -->
    <header class="masthead">

        <div class="intro-text">
          <div class="intro-lead-in">Your interests lead to new relationships!</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="{{ route('signup.get') }}">Sign Up</a>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="{{ route('login') }}">Log In</a>
   
   <div class="clearfix"></div>
   
          
  　<div class="dropdown">
      　<button class="dropbtn">Click here....</button>
        　<div class="dropdown-content">
          　    <a href="#">シェアして見つけて繋がって<br>明日の会話につなげよう</a>
          </div>
  　</div>
   
          <br>

            </div>

    </header>

@endsection
