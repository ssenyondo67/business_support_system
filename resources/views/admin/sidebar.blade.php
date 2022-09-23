<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    @vite(['resources/js/app.js'])

</head>
<body class="bg-light " style="display: flex;">
     
    <div class="d-flex flex-column flex-shrink-0 p-3 vh-100  " style="width: 200px; background-color:#d3d3d3; transparacy:100%;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
          <span class="fs-4" >LOGO</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link active" aria-current="page">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
              Products
            </a>
          </li>
          <li>
            <a href="{{ route('participantlist') }}" class="nav-link link-dark">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
              Participants
            </a>
          </li>
          <li>
            <a href="{{ route('add_reward') }}" class="nav-link link-dark">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
              Add rewards
            </a>
          </li>
          <li>
            <a href="{{ route('adminRegistration') }}" class="nav-link link-dark">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
              Add admin
            </a>
          </li>
          <li>
            <a href="{{ route('showreport') }}" class="nav-link link-dark">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
              Report
            </a>
          </li>
          <li>
            <a href="{{ route('editAdminProfile') }}" class="nav-link link-dark">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
              Edit Profile
            </a>
          </li>
          <li>
            <a href="{{ route('logoutUser') }}" class="nav-link link-dark">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
              Logout
            </a>
          </li>
        </ul>
        <hr>
      
      </div>

@yield('content')

</body>
</html>