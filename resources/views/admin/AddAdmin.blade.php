@extends("admin.sidebar")
@section('content')



<section class="form vh-100 mt-0 bg " style="width:100%;margin-left:auto;margin-right:0;margin-top:0;">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-2">Add Administrator</h2>

              <form action="{{ route('registerAdmin') }}" method="POST">
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
                  <label class="form-label mb-0" for="form3Example1cg">UserName</label>
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg"
                  value="{{ old('username') }}" name="username" placeholder="Enter UserName" />
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
                  value="{{ old('email') }}" name="email" placeholder="Enter Email" />
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




@endsection