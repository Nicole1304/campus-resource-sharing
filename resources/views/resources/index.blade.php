@extends('layouts.app')
@section('title', 'Resources')

@section('content')
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="display-6 fw-bold text-white">Available Resources</h1>
        <a href="{{ route('resources.create') }}" class="btn btn-light btn-lg rounded-pill px-4">
            Add New Resource
        </a>
    </div>

    <div class="card shadow-lg border-0" style="border-radius: 20px; background: rgba(255,255,255,0.95);">
        <div class="card-body p-4">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Resource Name</th>
                        <th>Category</th>
                        <th>Owner</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($resources as $resource)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><strong>{{ $resource->name }}</strong></td>
                        <td>{{ ucfirst($resource->category) }}</td>
                        <td>{{ $resource->owner->name }}</td>
                        <td>
                            <span class="badge bg-{{ $resource->status == 'available' ? 'success' : 'warning' }} fs-6">
                                {{ ucfirst($resource->status) }}
                            </span>
                        </td>
                        <td>
                            @if($resource->owner_id === auth()->id())
                                <a href="{{ route('resources.edit', $resource) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('resources.destroy', $resource) }}" method="POST" class="d-inline">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this resource?')">Delete</button>
                                </form>
                            @else
                                @if($resource->status == 'available')
                                    <form action="{{ route('borrow.request', $resource) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-success btn-sm">Request to Borrow</button>
                                    </form>
                                @else
                                    <button class="btn btn-secondary btn-sm" disabled>Not Available</button>
                                @endif
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center py-4 text-muted">No resources available yet.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

            <div class="mt-4">
                {{ $resources->links() }}
            </div>
        </div>
    </div>
</div>
@endsection