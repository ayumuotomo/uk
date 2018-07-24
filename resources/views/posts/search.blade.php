@extends('layouts.app')
@section('content')

<br><br><br><br><br><br>
<div class="col-sm-8" style="text-align:right;">
  <div class="paginate">
  {{-- $Bdata->appends(Request::only(keyword))->links() --}}
  </div>
</div>

<div >
        
        @if (count($posts) > 0)
                @include('posts.posts', ['posts' => $posts])
        @endif
        
      
        
</div>

@endsection