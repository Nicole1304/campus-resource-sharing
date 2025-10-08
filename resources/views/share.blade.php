@extends('layouts.app')

@section('title', $title)

@section('content')
    <h1>{{ $title }}</h1>
    <form>  <!-- No action, front-end only -->
        <div class="mb-3">
            <label for="name" class="form-label">Resource Name</label>
            <input type="text" class="form-control" id="name">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <select class="form-select" id="type">
                <option>Book</option>
                <option>Equipment</option>
                <option>Notes</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Share</button>
    </form>
@endsection