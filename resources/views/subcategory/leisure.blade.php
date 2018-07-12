@extends('layouts.app')

@section('content')

<div class="form-group">
        {!! Form::open(['input type' => 'hidden', 'name' => 'subcategory', 'value' => 'leisure'])!!}

    <div class="row">
        <div class="form-group">
           
            <div class="col-sm-4">
            <label>Author</label>
            {!! Form::textarea('title', old('title'), ['class' => 'form-control', 'rows' => '2', 'placeholder' => '軽井沢']) !!}
           </div>
        </div>
       
        <div class="form-group">
            <div class="col-sm-4">
           <label>Title</label>
            {!! Form::textarea('subject', old('subject'), ['class' => 'form-control', 'rows' => '2', 'placeholder' => 'ハレルニテラス']) !!}
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-sm-4">
            <label>Details</label>
            {!! Form::textarea('detail', old('deatail'), ['class' => 'form-control', 'rows' => '2', ]) !!}
            </div>
        </div>
    </div>
            {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}

    {!! Form::close()!!}
    </div>
 

 
@endsection