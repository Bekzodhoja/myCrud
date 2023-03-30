<x-app-layout>
</x-app-layout>
@include('layouts')
<div class="container">
    <div>
        <h1 class="m-5 text-center">Create</h1>
        <div class="border p-2 rounded">
        <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 m-4">
                <label  class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" required >
              </div>
    
              <div class="mb-3 m-4">
                <label  class="form-label">Address</label>
                <input type="text" name="address" class="form-control" placeholder="Address" required>
              </div>
    
              <div class="mb-3 m-4">
                <label  class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" placeholder="Phone"required >
              </div>

              <div class="mb-3 m-4">
                <label  class="form-label">Photo</label>
                <input type="file" name="photo" class="form-control" placeholder="Photo" required>
              </div>
           
            <button type="submit" class="btn btn-primary m-4">Submit</button>
            
            <a href="{{ route('students.index') }}" class="btn btn-dark">Back</a>
          </form>
        </div>
    </div>
    
</div>