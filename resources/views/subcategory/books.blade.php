@extends('layouts.app')


@section('content')
 

<div class="row">
    <div class="col-xs-offset-3 col-xs-6">
        <div class="panel panel-default">
           
            <div class="panel-body">
                   {!! Form::open(['input type' => 'hidden', 'name' => 'subcategory', 'value' => 'books'])!!}

               <div class="form-group">
                  {!! form::label('title','Author')!!}
                 {!! Form::textarea('title', old('title'), ['class' => 'form-control', 'rows' => '2', 'placeholder' => '東野圭吾']) !!}
                </div>
                    <div class="form-group">
                        {!! form::label('subject', 'Title') !!}
                 {!! Form::textarea('subject', old('subject'), ['class' => 'form-control', 'rows' => '2', 'placeholder' => '卒業']) !!}
                    </div>
                  <div class="form-group">   
                   {!! form::label('detail','Details')!!}
                   {!! Form::textarea('detail', old('deatail'), ['class' => 'form-control', 'rows' => '10', ]) !!}
                  </div>
                    <div class="text-right">
                        {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}

                    </div>
                {!! form::close() !!}
            </div>
                   
        </div>
    </div>
</div>

@endsection
