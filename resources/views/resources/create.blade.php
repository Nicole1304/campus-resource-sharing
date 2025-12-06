@extends('layouts.app')
@section('title', 'Add Resource')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0" style="border-radius: 25px; background: rgba(255,255,255,0.95);">
                <div class="card-body p-5">
                    <h2 class="text-center mb-5" style="color:#2454AC;">Share a New Resource</h2>

                    <form action="{{ route('resources.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <input type="text" name="name" class="form-control form-control-lg" placeholder="Resource Name (e.g. Calculus Book)" required style="border-radius:20px; background:#D3D3D3;">
                        </div>
                        <div class="mb-4">
                            <select name="category" class="form-control form-control-lg" required style="border-radius:20px; background:#D3D3D3;">
                                <option value="">Select Category</option>
                                <option>Book</option>
                                <option>Equipment</option>
                                <option>Notes</option>
                                <option>Software</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <textarea name="description" class="form-control" rows="4" placeholder="Description (optional)" style="border-radius:20px; background:#D3D3D3;"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg px-5" style="border-radius:25px; background:#2454AC;">
                                Share Resource
                            </button>
                            <a href="{{ route('resources.index') }}" class="btn btn-secondary btn-lg px-5 ms-3" style="border-radius:25px;">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection