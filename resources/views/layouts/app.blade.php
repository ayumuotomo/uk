<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>The U.K.</title>
    
    <link href="{{ url('css/style.css')}}" rel="stylesheet" type="text/css">

    <!-- Bootstrap core CSS -->
     <link href="{{ url('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"> 

    <!-- Custom fonts for this template -->
    <link href="{{ url('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"> 
     <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel="stylesheet" type="text/css">
     <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'> 
     <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'> 
     <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'> 
     <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css' rel='stylesheet' type='text/css'> 

    <!-- Custom styles for this template -->

    <link href="{{ url('css/agency.css') }}" rel="stylesheet">
    <link href="{{ url('css/agency.min.css') }}" rel="stylesheet"> 
    

    </head>
    <body>
        @include('commons.navbar')


        @yield('cover')

            @include('commons.error_messages')
            @yield('content')


        @include('commons.footer')

    </body>
</html>

