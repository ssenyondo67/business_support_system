@extends("admin.sidebar")
@section('content')

    
<section class="form vh-100 mt-0 bg-light" style="width:100%;margin-left:auto;margin-right:0;margin-top:0;">
  <section >
        <div class="row row-cols-1 row-cols-md-2 g-4 m-1">
         @foreach ($products as $product)
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title text-uppercase">{{ $product->name }}</h3>
                  <h5 class="card-subtitle">UGX:{{ $product->rate_per_item }} </h5>
                  @foreach ($participants as $participant)
                    @if ($participant->id == $product->participant_id)
                        <h5 class="card-subtitle text-capitalize">{{ $participant->first_name}} {{ $participant->last_name }}</h5>
                    @endif
                  @endforeach  
                  <h4>Stock {{ $product->stock_available }} </h4>              
                  <p class="card-text text-capitalize">{{ $product->description }}</p>
                 
                </div>
              </div>
            </div>
          @endforeach
          

     </section>
  
@endsection
