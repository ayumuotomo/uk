<header>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">The U.K.</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::check())
                    
                      
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                        
                        <ul class="dropdown-menu">
                           <li><a href="{{ route('users.show', Auth::id()) }}">Mypage</a> </li>
                         
                            <li role="separator" class="divider"></li>
                            <li>{!! link_to_route('logout.get', 'Logout') !!}</li>
                        </ul>
                    </li>
                    
                <ul class="nav navbar-nav navbar-center">
                    <li class="dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
                         
                         <ul class="dropdown-menu">
                            <li><a href='subcategory.food'>FOOD</a></li>
                            <li><a href='subcategory.leisure'>LEISURE</a></li>
                            <li><a href='subcategory.books'>BOOKS</a></li>
                            <li><a href='subcategory.movie'>MOVIE</a></li>
                            <li><a href='subcategory.music'>MUSIC</a></li>
                            <li><a href='subcategory.sports'>SPORTS</a></li>
                            <li><a href='subcategory.textbook'>TEXTBOOK</a></li>
                            <li><a href='subcategory.others'>OTHERS</a></li>
                         </ul>
                         
                    @else
                        <li>{!! link_to_route('signup.get', 'Signup') !!}</li>
                        <li>{!! link_to_route('login', 'Login') !!}</li>
                    @endif
                </ul>
               
                        
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>