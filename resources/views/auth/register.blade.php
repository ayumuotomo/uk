<br>
<br>
<br>
<br>

@extends('layouts.app')

@section('content')




    <div class="col-lg-12 text-center">
        <!--<div class="panel panel-default">-->
             <h2 class="section-heading text-uppercase">Sign Up</h2>
             
            <!--<div class="panel-body" "row text-center">-->
                {!! Form::open(['route' => 'signup.post']) !!}
                    <div class="offset-3 col-md-6" "form-group">
                        {!! Form::label('name', 'Name') !!}
                        {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                    </div>

                   

                    <div class="offset-3 col-md-6" "form-group">
                        {!! Form::label('password', 'Password') !!}
                        {!! Form::password('password', ['class' => 'form-control']) !!}
                    </div>

                    <div class="offset-3 col-md-6" "form-group">
                        {!! Form::label('password_confirmation', 'Password（Confirmation）') !!}
                        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                    </div>
                    <br>

                    <div class="offset-3 col-md-6" "text-center">
                        {!! Form::submit('Register', ['class' => 'btn-warning']) !!}
                    </div>
                {!! Form::close() !!}
            <!--</div>-->
        <!--</div>-->
    </div>

<footer>
    <div class="text-center text-muted">© 2018 THE U.K.</div>
</footer>
@endsection