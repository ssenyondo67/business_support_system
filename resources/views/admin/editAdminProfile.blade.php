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
          <li class="">
            <a href="{{ route('dashboard') }}" class="nav-link active" aria-current="page">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
              Products
            </a>
          </li>
          <li class=" border border-primary">
            <a href="{{ route('participantlist') }}" class="nav-link link-dark">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
              Participants
            </a>
          </li>
          <li class=" border border-primary">
            <a href="{{ route('add_reward') }}" class="nav-link link-dark">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
              Add rewards
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('adminRegistration') }}" class="nav-link active">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
              Add admin
            </a>
          </li>
          <li class=" border border-primary">
            <a href="{{ route('showreport') }}" class="nav-link link-dark">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
              Report
            </a>
          </li>
          <li class="nav-item" >
            <a href="{{ route('editAdminProfile') }}" class="nav-link active">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
              Edit Profile
            </a>
          </li>
          <li class=" border border-primary">
            <a href="{{ route('logoutUser') }}" class="nav-link link-dark">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
              Logout
            </a>
          </li>
        </ul>
        <hr>
      
      </div>

<section class="form vh-100 mt-0 bg-light " style="width:100%;margin-left:auto;margin-right:0;margin-top:0;">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-2">Add Administrator</h2>

              <form action="/updateAdminProfile/{{ $admin->id }}" method="POST">
                @if (Session::has('success'))
                 <div class="alert alert-success">{{Session::get('success') }}</div>
                @endif
                @if (Session::has('fail'))
                  <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                @endif
                @csrf

                <div class="form-outline mb-2">
                  <label class="form-label mb-0" for="form3Example1cg">First Name</label>
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg"
                  value="{{ $admin->first_name }}" name="first_name" placeholder="Enter First Name" />
                  <span class="text-danger">@error('first_name') {{ $message }}                     
                  @enderror</span>
                </div>

                <div class="form-outline mb-2">
                  <label class="form-label mb-0" for="form3Example1cg">Last Name</label>
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg"
                  value="{{ $admin->last_name }}" name="last_name" placeholder="Enter Last Name" />
                  <span class="text-danger">@error('last_name') {{ $message }}                     
                    @enderror</span>
                </div>

                <div class="form-outline mb-2">
                  <label class="form-label mb-0" for="form3Example1cg">UserName</label>
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg"
                  value="{{ $admin->username }}" name="username" placeholder="Enter UserName" />
                  <span class="text-danger">@error('username') {{ $message }}                     
                    @enderror</span>
                </div>
                     
                <div class="form-outline mb-2">
                  <label class="form-label mb-0" for="form3Example4cg">Default Password</label>
                  <input type="password" id="form3Example4cg" class="form-control form-control-lg"
                   name="password" placeholder="Enter Password" />
                  <span class="text-danger">@error('password') {{ $message }}                     
                    @enderror</span>
                </div>

                <div class="form-outline mb-2">
                  <label class="form-label mb-0" for="form3Example3cg">Your Email</label>
                  <input type="email" id="form3Example3cg" class="form-control form-control-lg"
                  value="{{ $admin->email }}" name="email" placeholder="Enter Email" />
                  <span class="text-danger">@error('email') {{ $message }}                     
                    @enderror</span>
                </div>


                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary btn-block btn-lg gradient-custom-4 text-body">Add</button>
                </div>

                
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>





</body>
</html>