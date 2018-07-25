
@extends('layouts.app')

@section('content')

<div class="col-lg-12 text-center">
        <div class="panel panel-default">
             <h2 class="section-heading text-uppercase">Log In</h2>
                <div class="panel-body text-center row">
                    <div class="offset-md-3 col-md-6">
                        {!! Form::open(['route' => 'login.post']) !!}
                            <div class="form-group">
                                {!! Form::label('name', 'Name') !!}
                                {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('password', 'Password') !!}
                                {!! Form::password('password', ['class' => 'form-control']) !!}
                            </div><br>
                            <div class="text-center">
                                {!! Form::submit('Login', ['class' => 'btn-warning']) !!}
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
                <p>New user? {!! link_to_route('signup.get', 'Sign up now!') !!}</p>
        </div>
</div>
@endsection