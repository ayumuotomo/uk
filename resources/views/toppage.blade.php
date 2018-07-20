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

 <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal">
            
              
             
              <div class="sample6">
              <img src="img/portfolio/lifestyle_image.jpg" alt="#">
              <div class="mask">
                <div class="caption">
                
                    <a href="subcategory/food">Food</a><br>
                      
                    <a href="subcategory/leisure">Leisure</a>
                  
                </div>
              </div>
              </div>
            </a>
          </div>
          
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal">
            
              
             
              <div class="sample6">
              <img src="img/portfolio/entertainment_image.jpg" alt="#">
              <div class="mask">
                <div class="caption">
                  
                    <a href="subcategory/sports">Sports</a><br>
                    <a href="subcategory/books">Books</a><br>
                    <a href="subcategory/movie">Movie</a><br>
                    <a href="subcategory/music">Music</a><br>
                  
                </div>
              </div>
              </div>
            </a>
          </div> 
          
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal">
            
              
             
              <div class="sample6">
              <img src="img/portfolio/learning_image.jpg" alt="#">
              <div class="mask">
                <div class="caption">
                  
                    <a href="subcategory/textbook">Textbook</a><br>
                    <a href="subcategory/others">Others</a><br>

                </div>
              </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
              
      
       
          

@endsection