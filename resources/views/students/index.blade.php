    <x-app-layout>
    </x-app-layout>
    @include('layouts')

<div class="container">
    <h1 class="m-5 text-center">All Students</h1>
    <a href="{{ route('students.create') }}" class="btn btn-primary mb-2">Creat New Student</a>
    <table class="table table-dark table-hover text-center">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach ($students as $student)
            
        <tr>
            <td><a href="{{ route('students.show',$student->id) }}">{{ $student->id }}</a></td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->address }}</td>
            <td>{{ $student->phone }}</td>
            <td>
                <a class="btn btn-light m-2" href="{{ route('students.edit',$student->id) }}">Edit</a>
             
            </td>
            <td>
                <form action="{{ route('students.destroy',$student->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger m-2" onclick="return confirm('Are you sure ?')">
                     Delete
                    </button>
                </form>
            </td>
        
        </tr>
        @endforeach

      </table>
</div>
