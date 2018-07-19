

<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">The U.K.</a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              @foreach(config('app.category') as $category)
              <a href="{{ url('subcategory/'.$category['name']) }}"  class="header-nav-link header-nav-sub-link">{{strtoupper($category['name'])}}</a>
              @endforeach
            </li>
             

            
          </ul>
        </div>
      </div>
    </nav>
    
    

