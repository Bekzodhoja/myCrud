<x-app-layout>
</x-app-layout>
@include('layouts')
<div class="container">
    <div>
        <h1 class="m-5 text-center">Create</h1>
        <div class="border p-2 rounded">
        <form action="{{ route('students.store') }}" method="POST">
            @csrf
            <div class="mb-3 m-4">
                <label  class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" >
              </div>
    
              <div class="mb-3 m-4">
                <label  class="form-label">Address</label>
                <input type="text" name="address" class="form-control" placeholder="Address" >
              </div>
    
              <div class="mb-3 m-4">
                <label  class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" placeholder="Phone" >
              </div>
           
            <button type="submit" class="btn btn-primary m-4">Submit</button>
            
            <a href="{{ route('students.index') }}" class="btn btn-dark">Back</a>
          </form>
        </div>
    </div>
    
</div>