@extends('layouts.app')
@section('content')

<div class="container-fluid">
<div class="row">
<!--↓↓ 検索フォーム ↓↓-->
<div class="col-sm-4" style="padding:20px 0; padding-left:0px;">
<form class="form-inline" action="/posts/search">
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

<div >
        
        @if (count($posts) > 0)
                @include('posts.posts', ['posts' => $posts])
        @endif
        
      
        
</div>

@endsection