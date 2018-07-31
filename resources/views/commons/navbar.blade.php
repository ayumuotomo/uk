@if (Auth::check())
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
  <div class="container">
  <a class="navbar-brand js-scroll-trigger" href="/">The U.K.</a>
  
    <div class="collapse navbar-collapse" id="navbarResponsive">
      
      <ul class="navbar-nav text-uppercase ml-auto">
        

      <div>
        <form  action="/posts/search" method="GET">
          <input class="search" type="text" value="" name="keyword" />
        </form>
      </div>
               &nbsp&nbsp;
 
        
      <li class="nav-item">
          @foreach(config('app.category') as $category)
          <a href="{{ url('subcategory/'.$category['name']) }}"  class="header-nav-link header-nav-sub-link">{{strtoupper($category['name'])}}</a>
          @endforeach
      </li>
      
      &nbsp&nbsp;
      
          
          <li>
            <a href="{{ route('users.show', Auth::id()) }}" class="header-nav-link header-nav-sub-link">My Page</a>
          </li>
          
             &nbsp&nbsp;
          
          <li>
            <a href="{{ route('logout.get') }}" class="header-nav-link header-nav-sub-link">Log out</a>
          </li>

      
    
          @else
              
          <div class="harasan">
            <nav class="navbar navbar-expand-lg navbar-dark　fixed-top" id="mainNav">

            <a class="navbar-brand js-scroll-trigger" href="/">The U.K.</a>
            
          </div>
              
          @endif

       </ul>
    </div> 
  </div>

</nav>