

<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100' rel='stylesheet' type='text/css'>

<div class="fullWidth header">
  <div class="container">
    <div class="col-xs-12 col-sm-2 col-md-3 col-md-offset-1 col-lg-4 col-lg-offset-1 header-logo"><a href="/" class="header-logo-name">The U.K.</a></div>
      <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6 header-nav">
          <ul>
            <li>
                <a href="/" class="header-nav-link header-nav-top-link">Home</a>
            </li>
            <li>
                <a href="/" class="header-nav-link header-nav-top-link">Category</a>
            <ul>
            
                   @foreach(config('app.category') as $category)
            <li><a href="subcategory/{{ ($category['name']) }}"  class="header-nav-link header-nav-sub-link">{{strtoupper($category['name'])}}</a></li>
              @endforeach
            </ul>
      
             <li>
                <a href="#" class="header-nav-link header-nav-top-link">
                  @auth
                  {{ Auth::user()->name }}
                  @else
                  
                  @endauth
                </a>
              <ul>
                <li><a href="{{ route('users.show', Auth::id()) }}" class="header-nav-link header-nav-sub-link">My Page</a></li>
                <li><a href="{{ route('logout.get') }}" class="header-nav-link header-nav-sub-link">Logout</a></li>
            
       
              </ul>
            </li>                  
           
                   
    </div>
  </div>
</div>