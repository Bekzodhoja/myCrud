@include('layouts')
<div class="container">
    <div>
        <h1 class="m-5 text-center">Edit</h1>
        <div class="border p-2 rounded">
        <form action="{{ route('students.update',$student->id) }}" method="POST">
            @method('put')
            @csrf
            <div class="mb-3 m-4">
                <label  class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $student->name }}">
              </div>
    
              <div class="mb-3 m-4">
                <label  class="form-label">Address</label>
                <input type="text" name="address" class="form-control" placeholder="Address" value="{{ $student->address }}" >
              </div>
    
              <div class="mb-3 m-4">
                <label  class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ $student->phone }}">
              </div>
           
            <button type="submit" class="btn btn-primary m-4">Submit</button>
            
            <a href="{{ route('students.index') }}" class="btn btn-dark">Back</a>
          </form>
        </div>
    </div>
    
</div>