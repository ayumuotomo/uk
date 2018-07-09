@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="row">
            <aside class="col-md-4">
            </aside>
            <div class="col-xs-8">
                    @include('toppage')
            </div>
        </div>
    @else
        <div class="cover">
             <div class="cover-inner">
                <h1>Your interests lead to new relationships</h1>
               <a href="{{ route('signup.get') }}" class="btn btn-success btn-lg">Start The U.K.</a>
               <a href="{{ route('login') }}" class="btn btn-success btn-lg">Login</a>
            </div>
        </div>
    @endif
@endsection
