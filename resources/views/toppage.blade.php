
@extends('layouts.app')


@section('content')
<div class="container">
     



        @foreach(config('app.category') as $category)
        <a href="subcategory/{{ ($category['name']) }}">{{strtoupper($category['name'])}}</a><br>
        @endforeach
        
        @if (count($posts) > 0)
                @include('posts.posts', ['posts' => $posts])
        @endif
           
    
  
   
</div>


                

@endsection
