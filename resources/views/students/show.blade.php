@extends('layout.app')
@section('title', $student->name)

@section('content')
<h3>{{ $student->name }}</h3>
@endsection
