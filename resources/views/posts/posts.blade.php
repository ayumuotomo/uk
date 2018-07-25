<div class="container">
<div class="kaho">
<div class="row post-list">
@foreach ($posts as $post)
 <?php $user = $post->user; ?>
    <div class="col-sm-4">
        <div class="comment" id="lou">
            <a href="{{ url('posts/'.$post->id.'/show') }}">
                <h3>{!! nl2br(e($post->title)) !!}<br /> 
                {!! nl2br(e($post->subject)) !!}</h3>　

            </a>
            </div>
           
 <span class="text-muted">{{ $post->created_at }}</span>
            
               
    </div>

    
@endforeach
</div>


<div class="clearfix"></div>
</div>
</div>