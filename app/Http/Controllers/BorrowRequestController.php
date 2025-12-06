<?php

namespace App\Http\Controllers;

use App\Models\BorrowRequest; // This will be fixed in step 2
use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BorrowRequestController extends Controller
{
    public function store(Resource $resource)
    {
        // Prevent borrowing own item
        if ($resource->owner_id === Auth::id()) {
            return back()->with('error', 'You cannot borrow your own resource.');
        }

        // Prevent borrowing unavailable item
        if ($resource->status !== 'available') {
            return back()->with('error', 'This resource is not available.');
        }

        // Create borrow request
        \App\Models\BorrowRequest::create([
            'resource_id' => $resource->id,
            'borrower_id' => Auth::id(),
            'status' => 'pending'
        ]);

        // Optional: update resource status to pending
        $resource->update(['status' => 'pending']);

        return back()->with('success', 'Borrow request sent successfully!');
    }

    public function myRequests()
    {
        $requests = \App\Models\BorrowRequest::where('borrower_id', Auth::id())
                     ->with('resource.owner')
                     ->latest()
                     ->get();

        return view('borrow.myrequests', compact('requests'));
    }
}