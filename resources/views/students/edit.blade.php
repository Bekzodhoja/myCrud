<x-app-layout>
</x-app-layout>
@include('layouts')
<div class="container">
    <div>
        <h1 class="m-5 text-center">Edit</h1>
        <div class="border p-2 rounded">
        <form action="{{ route('students.update',$student->id) }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3 m-4">
                <label  class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $student->name }}" required>
              </div>
    
              <div class="mb-3 m-4">
                <label  class="form-label">Address</label>
                <input type="text" name="address" class="form-control" placeholder="Address" value="{{ $student->address }}" required >
              </div>
    
              <div class="mb-3 m-4">
                <label  class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ $student->phone }}" required>
              </div>

              <div class="mb-3 m-4">
                <label  class="form-label">Photo</label>
                <input type="file" name="photo" class="form-control" placeholder="Photo" alue="{{ $student->photo }}" required>
                <img src="/photo/{{ $student->photo }}"  style="width: 80px">

              </div>
           
            <button type="submit" class="btn btn-primary m-4">Submit</button>
            
            <a href="{{ route('students.index') }}" class="btn btn-dark">Back</a>
          </form>
        </div>
    </div>
    
</div>