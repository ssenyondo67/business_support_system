@extends('admin.sidebar')
@section('content')

      <section class="form vh-100 mt-0 bg-light" style="width:100%;margin-left:auto;margin-right:0;margin-top:0;">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
          <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div class="card" style="border-radius: 15px;">
                  <div class="card-body p-5">
                    <h2 class="text-uppercase text-center mb-2">Add Reward</h2>
      
                    <form action="{{ route('registerReward') }}" method="POST">
                      @if (Session::has('success'))
                       <div class="alert alert-success">{{Session::get('success') }}</div>
                      @endif
                      @if (Session::has('fail'))
                        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                      @endif
                      @csrf
      
                      <div class="form-outline mb-2">
                        <label class="form-label mb-0" for="form3Example1cg">Reward Name</label>
                        <input type="text" id="form3Example1cg" class="form-control form-control-lg"
                        value="{{ old('namne') }}" name="name" placeholder="Enter reward name" />
                        <span class="text-danger">@error('name') {{ $message }}                     
                        @enderror</span>
                      </div>
      
                      <div class="form-outline mb-2">
                        <label class="form-label mb-0" for="form3Example1cg">Description</label>
                        <textarea type="text" id="form3Example1cg" class="form-control form-control-lg"
                        value="{{ old('description') }}" name="description" placeholder="Enter reward description" ></textarea>
                        <span class="text-danger">@error('description') {{ $message }}                     
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
{{-- 
<h1 class="card">dashboard</h1>
     <hr>
    <h3>{{ $data->first_name }} {{ $data->last_name }}</h3>
     <a href="">longout</a>  --}}