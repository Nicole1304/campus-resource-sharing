@extends('layouts.app')
@section('title', 'Contact')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg border-0" style="border-radius: 25px; background: rgba(255,255,255,0.95);">
                <div class="card-body p-5 text-center">
                    <h2 style="color:#2454AC;">Contact Us</h2>
                    <p class="text-muted">For inquiries and feedback</p>
                    <form>
                        <input type="text" class="form-control mb-3" placeholder="Your Name" style="border-radius:20px; background:#D3D3D3;">
                        <input type="email" class="form-control mb-3" placeholder="Email" style="border-radius:20px; background:#D3D3D3;">
                        <textarea class="form-control mb-4" rows="5" placeholder="Message" style="border-radius:20px; background:#D3D3D3;"></textarea>
                        <button type="button" class="btn btn-primary px-5" style="border-radius:25px; background:#2454AC;">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection