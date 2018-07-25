
@extends('layouts.app')
@section('content')

<div class="clearfix"></div>

 <div class="container" id="content">
    <!--<div class="row">-->
        <div class="col-lg-12 text-center">
            <!--<div class="panel panel-default">-->

                <div class="row">
                    <div class="col-md-3">
                        <img src="{{ url('img'). '/'. $subcategory['icon'] }}" alt="books">
                    </div>
                        {!! Form::open(['route' => 'posts.store','input type' => 'hidden', 'name' => 'subcategory', 'value' => $subcategory['name'], 'class'=> 'col-md-6 col-md-offset-3']) !!}
                            {!! Form::hidden('subcategory', $subcategory['name']) !!}
                            <div class="form-group">
                            <label>{{ $subcategory['label']['place'] }}</label>
                                    {!! Form::textarea('title', old('title'), ['class' => 'form-control', 'rows' => '2', 'placeholder' => $subcategory['placeholder']['place']]) !!}
                            </div>
                            <div class="form-group">
                            <label>{{ $subcategory['label']['title'] }}</label>
                                    {!! Form::textarea('subject', old('subject'), ['class' => 'form-control', 'rows' => '2', 'placeholder' => $subcategory['placeholder']['title']]) !!}
                            </div>
                            <div class="form-group">
                            <label>Details</label>
                            {!! Form::textarea('detail', old('deatail'), ['class' => 'form-control', 'rows' => '2',  'placeholder' => 'Free space' ]) !!}
                            </div>
                            <br>
                            <br>
                            <br>
                            <div class="text-right">
                            {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                            </div>
                        {!! Form::close()!!}
                </div>

            </div>
        </div>
    </div>
</div>

<br>
<div class="container">
<div class="row post-list">
@foreach ($posts as $post)
    <div class="col-sm-4">
        <div class="comment" id="lou">
            <a href="{{ url('posts/'.$post->id.'/show') }}" >
                <h3>{!! nl2br(e($post->title)) !!}<br /> 
                {!! nl2br(e($post->subject)) !!}</h3>　

            </a>

        </div>
    </div>
@endforeach
</div> 
</div>
@endsection


