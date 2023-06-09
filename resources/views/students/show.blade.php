<x-app-layout>
</x-app-layout>
@include('layouts')
    
    
<div class="container">
    <h1 class="m-5 text-center">Show this Student</h1>
    <div class="col  d-flex justify-content-center">

        <div class="card bg-dark text-light" style="width: 1020px;">
       
         
          <table class="table table-dark table-hover text-center">
            <tr>

              <th>Id</th>
              <th>Name</th>
              <th>Address</th>
              <th>Phone</th>
              <th>Photo</th>

            </tr>
            <tr>
              <td >{{ $student->id }}</td>
              <td >{{ $student->name }}</td>
              <td >{{ $student->address }}</td>
              <td >{{ $student->phone }}</td>
              <td >
                <img class="mx-auto d-block" src="/photo/{{  $student->photo  }}" style="width: 150px" alt="" >
              </td>
              
            </tr>
            </table>
            <div class="text-center">
              <a href="{{ route('students.index') }}" class="btn btn-light m-2 w-50 fw-bold">Back to main page</a>


            </div>

          </div>
    </div>

    </div>