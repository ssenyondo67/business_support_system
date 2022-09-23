 @extends('app')
 @section('navbar')
 <div style="text-align:right; margin-right:50px; " >
  <div class="dropdown" >
      <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
        Manage Account
      </button>
      <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
        <li><a class="dropdown-item active" href="#">Edit Profile</a></li>
        <li><a class="dropdown-item" href="{{ route('logoutUser') }}">Logout</a></li>
        
      </ul>
    </div>
  </div>
{{-- end of manage account  --}}

</div>  

<section class="form vh-90 ">
  <section >
        <div class="row row-cols-1 row-cols-md-2 g-4 m-1">
         @foreach ($products as $product)
            <div class="col">
              <div class="card ">
                <div class="card-body">
                  <h3 class="card-title text-uppercase">{{ $product->name }}</h3>
                  <h5 class="card-subtitle">UGX:{{ $product->rate_per_item }} </h5>
                                
                  <p class="card-text text-capitalize">{{ $product->description }}</p>
                  <a href="/product/{{ $product->id }}" class="btn btn-primary">book now</a>
                </div>
              </div>
            </div>
          @endforeach
        
        
      
       
     </section>

     @endsection