@extends('app')
@section('navbar')

      <section class="form vh-100 ">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
          <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div class="card" style="border-radius: 15px;">
                  <div class="card-body p-5">
                    <h2 class="text-uppercase text-center mb-2">Book {{ $product->name }}</h2>
      
                    <form action="/book/{{ $product->id }}" method="POST">
                      @if (Session::has('success'))
                       <div class="alert alert-success">{{Session::get('success') }}</div>
                      @endif
                      @if (Session::has('fail'))
                        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                      @endif
                      @csrf
                        <h5 class="font-wight-bold">Available:{{ $product->stock_available }}</h5>
                      {{-- <div class="form-outline mb-4">
                        <label class="form-label mb-0" for="form3Example1cg">Product Name</label>
                        <input type="text" id="form3Example1cg" class="form-control form-control-lg"
                        value="{{ $product->name }}" name="name" />
                        <span class="text-danger">@error('name') {{ $message }}                     
                        @enderror</span>
                      </div> --}}
      
                      <div class="form-outline mb-2">
                        <label class="form-label mb-0" for="form3Example1cg">Quantity</label>
                        <input type="number" id="form3Example1cg" class="form-control form-control-lg"
                        value="{{ old('number') }}" name="number" ></textarea>
                        <span class="text-danger">@error('number') {{ $message }}                     
                          @enderror</span>
                      </div>
      
                      <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary btn-block btn-lg gradient-custom-4 text-body">book</button>
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