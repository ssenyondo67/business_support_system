@extends('app')
@section('navbar')


<section class="form vh-100 ">

    <section class="best_participant">
        <div class="row row-cols-1 row-cols-md-2 g-4 m-1">
         @foreach ($participants as $participant)
           @if ($participant->rank ==1)
            <div class="col  ">
              <div class="card shadow-sm">
                <div class="card-body">
                  <h3 class="card-title text-uppercase">{{ $participant->first_name }} {{ $participant->last_name }} </h3>
                  @foreach ($products as $product )
                    @if($product->participant_id ==$participant->id)
                  <h5 class="card-subtitle">producer of {{ $product->name }} </h5>
                    @endif      
                  @endforeach
                 
                  <p class="card-text text-capitalize">is the current leading producer</p>
                  <a href="{{ route('products') }}" class="btn btn-primary">product</a>
                </div>
              </div>
            </div>
            @endif
          @endforeach
        
        
      
       
     </section>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection