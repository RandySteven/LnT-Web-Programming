@extends('layout.app')
@section('title', 'Mahasiswa')

@section('content')
<div class="container">
    <h3>Home</h3>
    <table class="table table-dark table-striped">
        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>Gender</th>
            <th>Phone</th>
            <th>Action</th>
        </thead>
        <tbody>
            @forelse ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->gender }}</td>
                <td>{{ $student->phone }}</td>
                <td>
                    <a href="{{ route('student.edit', $student) }}" class="btn btn-success">Edit</a>
                    <form action="{{ route('student.delete', $student) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <a href="{{ route('student.show', $student) }}" class="btn btn-warning">See detail</a>
                </td>
            </tr>
            @empty
                No Data
            @endforelse
        </tbody>
    </table>
</div>
@endsection
