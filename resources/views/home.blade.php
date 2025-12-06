{{-- resources/views/home.blade.php --}}
@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="text-center py-5 mt-5">
    <h1 class="display-3 fw-bold text-white mb-4">
        Welcome to CRSN
    </h1>
    <p class="lead text-white mb-5 fs-4">
        Empower your Campus Community!<br>
        The Campus Resource Sharing Network (CRSN)
        connects students, faculty, and staff to share books,
        equipment, and notes effortlessly. Join us in fostering a collaborative
        and resourceful campus environment.
    </p>
    <a href="{{ route('resources.index') }}" 
       class="btn btn-light btn-lg px-5 py-3 rounded-pill shadow-lg fw-bold fs-3">
        Browse Resources
    </a>
</div>
@endsection