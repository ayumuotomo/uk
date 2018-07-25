@extends('layouts.app')

@section('content')


<h1>Share your interests...</h1>
<div class=teamuk><br>
<P>8つのカテゴリーから選んで投稿しよう！</P>
</div>

 <!-- Portfolio Grid -->
    <section class="bg-" id="portfolio">
      
     <div class="container">
        <div class="row">
          
          
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal">
            
              <h4>LifeStyle</h4>
             
              <div class="sample6" id="lifestyle">
             
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
            
              <h4>Entertainment</h4>
             
              <div class="sample6" id="entertainment">
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
            

            <h4>Learning</h4>
        
              <div class="sample6" id="learning">

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
    </section>
  

<section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Services</h2>
            <h3 class="text-muted">あなたの趣味、興味、関心からもっともっと繋がろう！</h3>
          </div>
        </div>
        <br>
        <br>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
            <img src="img/services/servicee.jpg">
            </span>
            <h4 class="service-heading">Share</h4>
            <p class="text-muted">大好きな映画、お気に入りの飲み屋、<br>おすすめの本、長年続けているスポーツ。<br>あなたの好きなことを、<br>ここだけのコミュニティでシェアしよう！
            </p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
             <img src="img/services/service.jpg">
            </span>
            <h4 class="service-heading">Find</h4>
          <p class="text-muted">カテゴリーごとにどんどん見つかる！<br>ディープなバンド好きも、<br>今人気なあのアクティビティも、<br>なかなかいないあの趣味好きも！！</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <img src="img/services/serviceee.jpg">
            </span>
            <h4 class="service-heading">Connect</h4>
            <p class="text-muted">気になる投稿をクリックして、<br>明日の会話に繋げよう！<br>オンラインでシェアした情報が、<br>オフラインの関係作りまでをサポート！</p>
          </div>
        </div>
      </div>
    </section>

    <div class="clearfix"></div>    
    


<div class="container">
<h2>New Posts!</h2>    
<br>
    </div>
@include('posts.posts')

</div>

@endsection