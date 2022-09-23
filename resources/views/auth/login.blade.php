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
     
    <section class="vh-100" style="background-color: #cfcfcf;">
    <div class="container py-1 h-100 ">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card align-items-center" style="border-radius: 1rem;">
            <div class="row g-0 pl-1" style="width:100%">
             
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4  text-black">
  
                  <form action="{{ route('loginUser') }}" method="POST">
                    @if (Session::has('fail'))
                    <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                  @endif
                    @csrf
  
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-lock fa-2x me-3" style="color: #ff6219;"></i>
                      <span class="h1 fw-bold mb-0">Logo</span>
                    </div>
  
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
  
                    <div class="form-outline mb-2 ">
                      <label class="form-label mb-0" for="form2Example17">Email address</label>
                      <input type="email" id="form2Example17" class="form-control form-control-lg"
                      value="{{ old('email') }}" name="email" placeholder="Enter Email" />
                      <span class="text-danger">@error('email') {{ $message }}                        
                      @enderror</span>
                    </div>
  
                    <div class="form-outline mb-2">
                      <label class="form-label mb-0" for="form2Example27">Password</label>
                      <input type="password" id="form2Example27" class="form-control form-control-lg" name="password" placeholder="Eneter Password" />
                      <span class="text-danger">@error('password') {{ $message }}                        
                        @enderror</span>
                    </div>
  
                    <div class="pt-1 mb-2">
                      <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                    </div>
  
                    <a class="small text-muted" href="#!">Forgot password?</a>
                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="{{ route('customerRegistration') }}"
                        style="color: #3h93f81;">Register here</a></p>
                    {{-- <a href="#!" class="small text-muted">Terms of use.</a>
                    <a href="#!" class="small text-muted">Privacy policy</a> --}}
                  </form>
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>
</html>