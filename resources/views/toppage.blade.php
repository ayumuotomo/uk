
@extends('layouts.app')


@section('content')

<div class="container-fluid">
<div class="row">
 
<!--↓↓ 検索フォーム ↓↓-->
<div class="col-sm-4" style="padding:20px 0; padding-left:0px;">
<form class="form-inline" action="/views/toppage">
  <div class="form-group">
   
        <input type="text" name="keyword" value="{{$keyword}}" class="form-control" placeholder="キーワードを入力してください！！">
    
  </div>
  <input type="submit" value="検索" class="btn btn-info">
</form>
</div>

<!--↑↑ 検索フォーム ↑↑-->
 
<div class="col-sm-8" style="text-align:right;">
  <div class="paginate">
  {{-- $Bdata->appends(Request::only(keyword))->links() --}}
  </div>
</div>

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
