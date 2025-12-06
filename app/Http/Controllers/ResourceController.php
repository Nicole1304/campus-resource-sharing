<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $resources = Resource::with('owner')->latest()->paginate(10);
        return view('resources.index', compact('resources'));
    }

    public function create()
    {
        return view('resources.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string',
            'description' => 'nullable|string',
        ]);

        auth()->user()->resources()->create($request->all());

        return redirect()->route('resources.index')->with('success', 'Resource added successfully!');
    }

    public function edit(Resource $resource)
    {
        if ($resource->owner_id !== auth()->id()) {
            abort(403);
        }
        return view('resources.edit', compact('resource'));
    }

    public function update(Request $request, Resource $resource)
    {
        if ($resource->owner_id !== auth()->id()) {
            abort(403);
        }

        $request->validate([
            'name' => 'required',
            'category' => 'required',
        ]);

        $resource->update($request->all());

        return redirect()->route('resources.index')->with('success', 'Resource updated!');
    }

    public function destroy(Resource $resource)
    {
        if ($resource->owner_id !== auth()->id()) {
            abort(403);
        }

        $resource->delete();
        return back()->with('success', 'Resource deleted.');
    }
}
