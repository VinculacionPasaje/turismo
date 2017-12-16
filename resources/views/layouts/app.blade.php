<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>

        <meta charset="utf-8">
        @yield('title')
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        <link rel="stylesheet" href="{{url('frontend/css/reset.css')}}">
         <link rel="stylesheet" href="{{url('frontend/css/supersized.css')}}">
          <link rel="stylesheet" href="{{url('frontend/css/style.css')}}">
              <link rel="shortcut icon" href="{{url('frontend/images/ico/icon.ico')}}">
        

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>

    <body>

      

        @yield('contenido')

        <!-- Javascript -->
        <script src="{{url('frontend/js/jquery.js')}}"></script>
        <script src="{{url('frontend/js/supersized.3.2.7.min.js')}}"></script>
       
        <script src="{{url('frontend/js/scripts.js')}}"></script>

       
        
           @yield('script')

    </body>

</html>
