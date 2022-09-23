@extends('admin.sidebar')
@section('content')

    
<div class="table-responsive bg-light  " style="width:80%;">
    <table class="table mx-4 mt-3">
    <caption>List of users</caption>
    <thead>
      <tr class="text-primary">
        <th scope="col">#</th>
        <th scope="col">Participant</th>
        <th scope="col">Product</th>
        <th scope="col">Rank</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($participants as $participant)
           
      <tr>
        <th scope="row">{{ $participant->id }}</th>
        <td>{{ $participant->first_name }} {{ $participant->last_name}}</td>
        
        @foreach ($products as $product )
            @if($product->participant_id == $participant->id)
              <td>{{ $product->name }}</td>
            @endif
        @endforeach
        <td>{{ $participant->rank }}</td>
      </tr>
     @endforeach  
    </tbody>
  </table>
  </div>
    
@endsection

