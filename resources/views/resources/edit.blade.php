@extends('layouts.app')
@section('title', 'Edit Resource')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0" style="border-radius: 25px; background: rgba(255,255,255,0.95);">
                <div class="card-body p-5">
                    <h2 class="text-center mb-5" style="color:#2454AC;">Edit Resource</h2>

                    <form action="{{ route('resources.update', $resource) }}" method="POST">
                        @csrf @method('PUT')
                        <div class="mb-4">
                            <input type="text" name="name" value="{{ $resource->name }}" class="form-control form-control-lg" required style="border-radius:20px; background:#D3D3D3;">
                        </div>
                        <div class="mb-4">
                            <select name="category" class="form-control form-control-lg" required style="border-radius:20px; background:#D3D3D3;">
                                <option {{ $resource->category == 'book' ? 'selected' : '' }}>Book</option>
                                <option {{ $resource->category == 'equipment' ? 'selected' : '' }}>Equipment</option>
                                <option {{ $resource->category == 'notes' ? 'selected' : '' }}>Notes</option>
                                <option {{ $resource->category == 'software' ? 'selected' : '' }}>Software</option>
                                <option {{ $resource->category == 'other' ? 'selected' : '' }}>Other</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <textarea name="description" class="form-control" rows="4" style="border-radius:20px; background:#D3D3D3;">{{ $resource->description }}</textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success btn-lg px-5" style="border-radius:25px;">Update</button>
                            <a href="{{ route('resources.index') }}" class="btn btn-secondary btn-lg px-5 ms-3" style="border-radius:25px;">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection