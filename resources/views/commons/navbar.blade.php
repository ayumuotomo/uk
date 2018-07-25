

<nav class="navbar navbar-expand-lg navbar-dark　fixed-top" id="mainNav">
  <div class="container">
  <a class="navbar-brand js-scroll-trigger" href="/">The U.K.</a>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav text-uppercase ml-auto">
      <li class="nav-item">
          @if (Auth::check())
          @foreach(config('app.category') as $category)
          <a href="{{ url('subcategory/'.$category['name']) }}"  class="header-nav-link header-nav-sub-link">{{strtoupper($category['name'])}}</a>
          @endforeach
      </li>
      
      &nbsp&nbsp;
      
      <div class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}</a>
        <ul class="dropdown-menu">
          
          
          <li>
            <a href="{{ route('users.show', Auth::id()) }}" class="header-nav-link header-nav-sub-link">My Page</a>
          </li>
          <li>
            <a href="{{ route('logout.get') }}" class="header-nav-link header-nav-sub-link">Log out</a>
          </li>
        </ul>
      </div>
          @else
              
          @endif

       </ul>
     </div>
       
<form  action="/posts/search" method="GET">
  <input class="search" type="text" value="" name="keyword" /></form>
 
</nav>

