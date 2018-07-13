@extends('layouts.app')

@section('content')
 
     <div class="form-group">
        {!! Form::open(['input type' => 'hidden', 'name' => 'subcategory', 'value' => 'food'])!!}

    <div class="row">
        <div class="form-group">
           
            <div class="col-sm-4">
            <label>Author</label>
            {!! Form::textarea('title', old('title'), ['class' => 'form-control', 'rows' => '2', 'placeholder' => '二子玉川']) !!}
           </div>
        </div>
       
        <div class="form-group">
            <div class="col-sm-4">
           <label>Title</label>
            {!! Form::textarea('subject', old('subject'), ['class' => 'form-control', 'rows' => '2', 'placeholder' => 'bills']) !!}
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

<div class="row">
    <div class="col-xs-offset-3 col-xs-6">
        <div class="panel panel-default">
           
            <div class="panel-body">
                     {!! Form::open(['input type' => 'hidden', 'name' => 'subcategory', 'value' => 'food'])!!}

               <div class="form-group">
                  {!! form::label('title','Station nearby')!!}
                 {!! Form::textarea('title', old('title'), ['class' => 'form-control', 'rows' => '2', 'placeholder' => '二子玉川']) !!}
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