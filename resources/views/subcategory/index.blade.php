<br>
<br>
<br>
<br>

@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-12 text-center">
        <div class="panel panel-default">
                    {!! Form::open(['route' => 'posts.store','input type' => 'hidden', 'name' => 'subcategory', 'value' => $subcategory['name']]) !!}
                    {!! Form::hidden('subcategory', $subcategory['name']) !!}
                <div class="offset-3 col-md-6" "form-group">
                    <label>{{ $subcategory['label']['place'] }}</label>
                            {!! Form::textarea('title', old('title'), ['class' => 'form-control', 'rows' => '2', 'placeholder' => $subcategory['placeholder']['place']]) !!}
                </div>
                <div class="offset-3 col-md-6" "form-group">
                    <label>{{ $subcategory['label']['title'] }}</label>
                            {!! Form::textarea('subject', old('subject'), ['class' => 'form-control', 'rows' => '2', 'placeholder' => $subcategory['placeholder']['title']]) !!}
                </div>
                <div class="offset-3 col-md-6" "form-group">
                    <label>Details</label>
                            {!! Form::textarea('detail', old('deatail'), ['class' => 'form-control', 'rows' => '2',  'placeholder' => 'Free space' ]) !!}
                </div>
                <br>
                <br>
                <br>
                <div class="offset-3 col-md-6" "text-right">
                            {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                </div>
                    {!! Form::close()!!}
            </div>
        </div>
    </div>

<br>
<br>
<br>

<div class="row post-list">
@foreach ($posts as $post)
    <div class="col-sm-4">
        <div class="comment">
            <a href="{{ url('posts/'.$post->id.'/show') }}" >
                <h3>{!! nl2br(e($post->title)) !!}<br /> 
                {!! nl2br(e($post->subject)) !!}</h3>　

            </a>

        </div>
    </div>
@endforeach
</div> 



@endsection


