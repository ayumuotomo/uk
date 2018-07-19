


    @if (Auth::user()->is_favorites($post->id))
        {!! Form::open(['route' => ['posts.unfavorite', $post->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-danger btn"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['posts.favorite', $post->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-warning btn"]) !!}
        {!! Form::close() !!}
    @endif
