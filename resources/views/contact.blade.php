@extends('layouts.app')

@section('title', $title)

@section('content')
    <div class="content-box">
        <h1>{{ $title }}</h1>
        <form>
            <label>Name:</label><input type="text">
            <label>Email:</label><input type="email">
            <label>Message:</label><textarea></textarea>
            <button type="submit" class="btn-custom">Send</button>
        </form>
        <p>Contact us for any queries about resource sharing.</p>
    </div>
@endsection