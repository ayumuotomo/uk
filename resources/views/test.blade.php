<div class="container" id="show">
        <div class="row">
            <div class="col-md-12">
             　<h1  class="text-center"><span class="text-danger"> {{ $user->name }}</span></h1>
            </div>
            
            <div class="col-md-6">
                <h1><p class="text-center"><a href="{{ route('users.show', ['id' => $user->id]) }}">History<span class="badge">{{ $count_posts }}</span></a></p></h1>
            </div>
            <div class="col-md-6">
                 <h1><p class="text-center"><a href="{{ route('users.favorites', ['id' => $user->id]) }}">Favorites <span class="badge">{{ $count_favorites }}</span></a></p></h1>
            </div>
        </div>
         <div class="row">
            
            @if (count($posts) > 0)
                @include('posts.posts', ['posts' => $posts])
            @endif
           
</div>