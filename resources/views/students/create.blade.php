@extends('layout.app')

@section('title', 'Create')

@section('content')
<div class="container">
    <h3>Create</h3>
    <form action="{{ route('student.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="">
                @error('name')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="">
                @error('phone')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Gender</label>
                <input type="radio" name="gender" value="male" id="male"><label for="male">Male</label>
                <input type="radio" name="gender" value="female" id="female"><label for="female">Female</label>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <textarea class="form-control @error('address') is-invalid @enderror" name="address" id="address" rows="3"></textarea>
                @error('address')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
