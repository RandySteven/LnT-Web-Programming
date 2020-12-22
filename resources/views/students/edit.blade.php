@extends('layout.app')
@section('title', 'Edit')

@section('content')
<div class="container">
    <h3>Edit</h3>
    <form action="{{ route('student.update', $student) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="{{ $student->name }}" id="name" placeholder="">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="" value="{{ $student->phone }}">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Gender</label>
                <input type="radio" name="gender" value="male" id="male"
                {{ $student->gender=='male' ? 'checked' : '' }}><label for="male">Male</label>
                <input type="radio" name="gender" value="female" id="female" {{ $student->gender=='female' ? 'checked' : '' }}><label for="female">Female</label>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <textarea class="form-control" name="address" id="address" rows="3">
                    {{ $student->address }}
                </textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
