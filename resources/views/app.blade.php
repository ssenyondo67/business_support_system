<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    @vite(['resources/js/app.js'])

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      
      <div class=" navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item mx-2">
            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item mx-2 text-bold">
            <a class="nav-link" href="{{ route('products') }}">Products</a>
          </li>
         
          <li class="nav-item mx-2">
            <a class="nav-link " href="{{ route('participants') }}" >Participants</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="mx-2">
                <a href="{{ route('login') }}"><span class="glyphicon glyphicon-user"></span> Login</a></li>
            <li class="">
            <a href="{{ route('customerRegistration') }}"><span class="glyphicon glyphicon-log-in"></span> Create account</a></li>
          </ul>
      </div>
    </div>
  </nav>
@yield('navbar')


</body>
</html>
    
