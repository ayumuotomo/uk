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
   
            <div class="container" id="fukidashi">
              <img src="img/icon.jpg">
                <span class="arrow">For more information...</span>
                  <p class="box23">
                    同期の好きなことを発見しよう  
                  </p>
            </div>
   
        </div>
      </div>
    </header>

@endsection

                        
               