<div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $data->Name }}</h5>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Age : {{ $data->Age }}</li>
      <li class="list-group-item">Address : {{ $data->Address }}</li>
      <li class="list-group-item">Phone Number : {{ data->Phone }}</li>
    </ul>
    <div class="card-body">
      <a href="{{ route('edit, $data->id') }}" class="card-link">Edit</a>
      <a href="{{ route('delete, $data->id')}}" method="POST" class="card-link">Delete</a>
    </div>
  </div>
