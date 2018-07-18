@extends('layouts.app')


@section('content')

<br>
<br>
<br>
<div class="container">
       <div class="input-type input-type-lg">
        @foreach(config('app.category') as $category)
       <h3><a href="subcategory/{{ ($category['name']) }}">{{strtoupper($category['name'])}}</a></h3><br>
        @endforeach
        </div>
        <div class="text-center">
        </div>
<br>
<br>
<br>
        <div class="status text-center">
        
        @if (count($posts) > 0)
                @include('posts.posts', ['posts' => $posts])
        @endif
</div>

@endsection