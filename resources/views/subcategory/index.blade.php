<br>
<br>
<br>
<br>
<br>
<br>

@extends('layouts.app')
@section('content')


<div class="clearfix"></div>

    <div class="col-lg-12 text-center">
        <!--<div class="panel panel-default">-->
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

<div class="clearfix"></div>

                <div class="offset-3 col-md-6" "text-right">
                            {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                            {!! Form::close()!!}
                </div>
        <!--</div>-->

</div>

<div class="clearfix"></div>

@include('posts.posts')

@endsection