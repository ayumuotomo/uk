@extends('layouts.app')

@section('content')
 
 <br>
 <br>
 <br>

 <!-- Portfolio Grid -->
    <section class="bg" id="portfolio">
      
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal">
            
              
             
              <div class="sample6">
              <img src="img/portfolio/lifestyle_image.jpg" alt="#">
              <div class="mask">
                <div class="caption" id="raki">
                
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
                <div class="caption" id="raki">
                  
                    <a href="subcategory/sports">Sports</a><br>
                    <a href="subcategory/books">Books</a><br>
                    <a href="subcategory/movies">Movies</a><br>
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
                <div class="caption" id="raki">
                  
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
              
@include('posts.posts')      
       
          

@endsection