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
    <div class="col-sm-2" style="padding:20px 0; padding-left:0px;">
<form class="form-inline" action="/posts/search" method="GET">
  <div class="form-group">
   
        <input type="text" name="keyword" value="" class="form-control" placeholder="キーワードを入力してください！！">
    
  </div>
  <input type="submit" value="検索" class="btn-warning">
</form>
</div>
  </div>
</nav>

