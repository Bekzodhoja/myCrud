@include('layouts')
    
    
<div class="container">
    <h1 class="m-5 text-center">All Students</h1>
    <div class="col  d-flex justify-content-center">

        <div class="card bg-dark text-light" style="width: 18rem;">
            <div class="card-header">
              {{ $student->id }}
            </div>
            <ul class="  list-group list-group-flush">
              <li class=" bg-dark text-light list-group-item">{{ $student->name }}</li>
              <li class=" bg-dark text-light list-group-item">{{ $student->address }}</li>
              <li class=" bg-dark text-light list-group-item">{{ $student->phone }}</li>
            </ul>
          </div>
    </div>

    </div>