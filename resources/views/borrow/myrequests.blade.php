@extends('layouts.app')
@section('title', 'My Borrow Requests')

@section('content')
<div class="container py-5">
    <h1 class="display-6 fw-bold text-white mb-4">My Borrow Requests</h1>

    <div class="card shadow-lg border-0" style="border-radius: 20px; background: rgba(255,255,255,0.95);">
        <div class="card-body p-4">
            <table class="table">
                <thead class="table-light">
                    <tr>
                        <th>Resource</th>
                        <th>Owner</th>
                        <th>Requested On</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($requests as $req)
                    <tr>
                        <td>{{ $req->resource->name }}</td>
                        <td>{{ $req->resource->owner->name }}</td>
                        <td>{{ $req->requested_at->format('M d, Y') }}</td>
                        <td>
                            <span class="badge bg-{{ $req->status == 'pending' ? 'warning' : ($req->status == 'approved' ? 'success' : 'danger') }}">
                                {{ ucfirst($req->status) }}
                            </span>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center py-4 text-muted">No requests yet.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection