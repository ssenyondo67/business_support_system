@extends("app")
@section('navbar')
<div style="text-align:right; margin-right:5px; " >
<div class="dropdown" >
    <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
      Manage Account
    </button>
    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
      <li><a class="dropdown-item active" href="{{ route('editCustomerProfile') }}">Edit Profile</a></li>
      <li><a class="dropdown-item" href="{{ route('logoutUser') }}">Logout</a></li>
      
    </ul>
  </div>
</div>
{{-- end of manage account  --}}

<div class="table-responsive m-4 " style="width:100; ">
  <table class="table ">
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
         
    <tr class="bg-light">
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