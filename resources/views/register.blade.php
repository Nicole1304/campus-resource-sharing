@extends('layouts.app')

@section('title', $title)

@section('content')
    <div class="content-box">
        <h1>{{ $title }}</h1>
        <form>
            <label>Name:</label><input type="text">
            <label>Email:</label><input type="email">
            <label>Password:</label><input type="password">
            <button type="submit" class="btn-custom">Register</button>
        </form>
    </div>
@endsection