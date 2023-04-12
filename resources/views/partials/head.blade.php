<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" /> 

    <title>EMCL</title>

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>

    <!-- vendor css -->
    <link href="{{asset('/../lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/../css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/../css/font-awesome.css')}}">

    @yield('style')

</head>