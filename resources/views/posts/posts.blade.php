
<div class="row post-list">
@foreach ($posts as $post)
 <?php $user = $post->user; ?>
    <div class="col-sm-4">
        <div class="comment">
            <a href="{{ url('posts/'.$post->id.'/show') }}" >
                <h3>{!! nl2br(e($post->title)) !!}<br /> 
                {!! nl2br(e($post->subject)) !!}</h3>　

            </a>
            </div>
           
 <span class="text-muted">{{ $post->created_at }}</span>
            

                @if (Auth::user()->id == $post->user_id)
                    {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn']) !!}
                    {!! Form::close() !!}
                @endif
    </div>

    
@endforeach
</div>


<div class="clearfix"></div>
</div>
