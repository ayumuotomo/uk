
@extends('layouts.app')


@section('content')



<div class="container">
     

<div class="status text-center">
       

        @foreach(config('app.category') as $category)
        <a href="subcategory/{{ ($category['name']) }}">{{strtoupper($category['name'])}}</a><br>
        @endforeach

      

</div>


    
  
   
</div>

@endsection