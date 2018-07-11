@extends('layouts.app')

@section('content')

<div class="row">

    <div class="form-group">
        {!! Form::model(['route' => 'posts.store']) !!}
        
     /** <div class="form-group">
      {!! Form::open(['input type' => 'hidden', 'name' => 'subcategory', 'value' => 'textbooks'])!!}
         {!! Form::close() !!}
         </div>*/
         
         
        
        
        {{ Form::open(['route' => 'posts.store'], array('class' => 'form')) }}

        <div class="form-group">
            <label>Subcategory</label>
            {!! Form::textarea('subcategory', old('subcategory'), ['class' => 'form-control', 'rows' => '2', 'placeholder' => 'textbook']) !!}
       </div>


        <div class="form-group">
            <label>Category</label>
            {!! Form::textarea('title', old('title'), ['class' => 'form-control', 'rows' => '2', 'placeholder' => 'プログラミング']) !!}
       </div>
       
       <div class="form-group">
           <label>Title</label>
            {!! Form::textarea('subject', old('subject'), ['class' => 'form-control', 'rows' => '2', 'placeholder' => 'いちばんやさしいPHPの教本']) !!}
        </div>
        
        <div class="form-group">
            <label>Details</label>
            {!! Form::textarea('detail', old('deatail'), ['class' => 'form-control', 'rows' => '2', 'placeholder' => 'Free space']) !!}
        </div>
            {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}

    {{ Form::close()}}
    {!! Form::close() !!}
   
    </div>
</div>
@endsection