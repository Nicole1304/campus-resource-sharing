@extends('layouts.app')

@section('title', $title)

@section('content')
    <div class="content-box">
        <h1>{{ $title }}</h1>
        <p>{{ $description }}</p>
        <a href="{{ route('resources') }}" class="btn-custom">Browse Resources</a>
    </div>
@endsection