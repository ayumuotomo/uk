@extends('layouts.app')

@section('content')
 

    <div class="form-group">
<<<<<<< HEAD:resources/views/subcategory/index.blade.php
        {!! Form::open(['input type' => 'hidden', 'name' => 'subcategory', 'value' => $subcategory['name']])!!}

        {!! Form::hidden('subcategory', $subcategory['name']) !!}
        <div class="form-group">
            <label>{{ $subcategory['label']['place'] }}</label>
            {!! Form::textarea('title', old('title'), ['class' => 'form-control', 'rows' => '2', 'placeholder' => $subcategory['placeholder']['place']]) !!}
       </div>
       
       <div class="form-group">
           <label>{{ $subcategory['label']['title'] }}</label>
            {!! Form::textarea('subject', old('subject'), ['class' => 'form-control', 'rows' => '2', 'placeholder' => $subcategory['placeholder']['title']]) !!}
=======
        {!! Form::open(['input type' => 'hidden', 'name' => 'subcategory', 'value' => 'books'])!!}

    <div class="row">
        <div class="form-group">
           
            <div class="col-sm-4">
            <label>Author</label>
            {!! Form::textarea('title', old('title'), ['class' => 'form-control', 'rows' => '2', 'placeholder' => '東野圭吾']) !!}
           </div>
        </div>
       
        <div class="form-group">
            <div class="col-sm-4">
           <label>Title</label>
            {!! Form::textarea('subject', old('subject'), ['class' => 'form-control', 'rows' => '2', 'placeholder' => '卒業']) !!}
            </div>
>>>>>>> master:resources/views/subcategory/books.blade.php
        </div>
        
        <div class="form-group">
            <div class="col-sm-4">
            <label>Details</label>
<<<<<<< HEAD:resources/views/subcategory/index.blade.php
            {!! Form::textarea('detail', old('deatail'), ['class' => 'form-control', 'rows' => '2',  'placeholder' => 'Free space' ]) !!}
=======
            {!! Form::textarea('detail', old('deatail'), ['class' => 'form-control', 'rows' => '2', ]) !!}
            </div>
>>>>>>> master:resources/views/subcategory/books.blade.php
        </div>
    </div>
            {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}

    {!! Form::close()!!}
    </div>

@endsection