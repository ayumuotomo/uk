@extends('layouts.app')


@section('content')
 

  
  <div class="row">
    <div class="col-xs-offset-3 col-xs-6">
        <div class="panel panel-default">
            <div class="panel-body">
                    {!! Form::open(['route' => 'posts.store','input type' => 'hidden', 'name' => 'subcategory', 'value' => $subcategory['name']]) !!}

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

                <div class="text-right">
                            {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                </div>
                    {!! Form::close()!!}
            </div>
        </div>
    </div>
</div>

@endsection