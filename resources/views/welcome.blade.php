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
   
   <div class="clearfix"></div>
   
            <div class="dropdown" id="fukidashi">
              <button class="dropbtn">For more information...</button>
                <div class="dropdown-content">
                   <a href="#">同期の好きなことを発見しよう<br>  
                  
                    趣味を投稿しよう  <br>
                
                    新しい繋がりが作れる  </a>
                </div>
            </div>
   
          <br>
              </div>
      </div>
    </header>

@endsection
