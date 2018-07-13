

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
            <li><a href="subcategory.leisure" class="header-nav-link header-nav-sub-link">LEISURE?</a></li>
            <li><a href="subcategory.books" class="header-nav-link header-nav-sub-link">BOOKS</a></li>
            <li><a href="subcategory.music" class="header-nav-link header-nav-sub-link">MUSIC</a></li>
            <li><a href="subcategory.sports" class="header-nav-link header-nav-sub-link">SPORTS</a></li>
            <li><a href="subcategory.textbook" class="header-nav-link header-nav-sub-link">TEXTBOOK</a></li>
            <li><a href="subcategory.others" class="header-nav-link header-nav-sub-link">OTHERS</a></li>
        </ul>
         
         <li>
          <a href="#" class="header-nav-link header-nav-top-link">{{ Auth::user()->name }}</a>
          <ul>
            <li><a href="{{ route('users.show', Auth::id()) }}" class="header-nav-link header-nav-sub-link">My Page</a></li>
              <li><a href="{{ route('logout.get') }}" class="header-nav-link header-nav-sub-link">Logout</a></li>
            
       
          </ul>
        </li>                  
           
                   
    </div>
  </div>
</div>