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
<body>
     
    <section class="vh-100 ">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form action="{{ route('registerCustomer') }}" method="POST">
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
                  value="{{ old('first_name') }}" name="first_name" placeholder="Enter First Name" />
                  <span class="text-danger">@error('first_name') {{ $message }}                     
                  @enderror</span>
                </div>

                <div class="form-outline mb-2">
                  <label class="form-label mb-0" for="form3Example1cg">Last Name</label>
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg"
                  value="{{ old('last_name') }}" name="last_name" placeholder="Enter Last Name" />
                  <span class="text-danger">@error('last_name') {{ $message }}                     
                    @enderror</span>
                </div>

                <div class="form-outline mb-2">
                  <label class="form-label mb-0" for="form3Example1cg">Date of birth</label>
                  <input type="date" id="form3Example1cg" class="form-control form-control-lg"
                  value="{{ old('last_name') }}" name="date_of_birth"  />
                  <span class="text-danger">@error('date_of_birth') {{ $message }}                     
                    @enderror</span>
                </div>

                <div class="form-outline mb-2">
                  <label class="form-label mb-0" for="form3Example1cg">UserName</label>
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg"
                  value="{{ old('username') }}" name="username" placeholder="Enter UserName" />
                  <span class="text-danger">@error('username') {{ $message }}                     
                    @enderror</span>
                </div>

                <div class="form-outline mb-2">
                  <label class="form-label mb-0" for="form3Example1cg">Address</label>
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg"
                  value="{{ old('address') }}" name="address" placeholder="Enter Address" />
                  <span class="text-danger">@error('address') {{ $message }}                     
                    @enderror</span>
                </div>

                <div class="form-outline mb-2">
                  <label class="form-label mb-0" for="form3Example1cg">Contact</label>
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg"
                  value="{{ old('contact') }}" name="contact" placeholder="Enter your Contact" />
                  <span class="text-danger">@error('contact') {{ $message }}                     
                    @enderror</span>
                </div>

                <div class="form-outline mb-2">
                  <label class="form-label mb-0" for="form3Example4cg">Password</label>
                  <input type="password" id="form3Example4cg" class="form-control form-control-lg"
                   name="password" placeholder="Enter Password" />
                  <span class="text-danger">@error('password') {{ $message }}                     
                    @enderror</span>
                </div>

                <div class="form-outline mb-2">
                  <label class="form-label mb-0" for="form3Example3cg">Your Email</label>
                  <input type="email" id="form3Example3cg" class="form-control form-control-lg"
                  value="{{ old('email') }}" name="email" placeholder="Enter Email" />
                  <span class="text-danger">@error('email') {{ $message }}                     
                    @enderror</span>
                </div>

                <div class="form-outline mb-2">
                  <label class="form-label mb-0" for="form3Example4cdg">Repeat your password</label>
                  <input type="password" id="form3Example4cdg" class="form-control form-control-lg" 
                    name="repeated_password" placeholder="Enter Password Again" />
                  <span class="text-danger">@error('repeated_password') {{ $message }}                     
                    @enderror</span>
                </div>

                <div class="form-check d-flex justify-content-center mb-3">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" name="terms&condition" />
                  <label class="form-check-label" for="form2Example3g">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

                <p class="text-center text-muted mt-3 mb-0">Have already an account? <a href="{{ route('login') }}"
                    class="fw-bold text-body"><u>Login here</u></a></p>

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