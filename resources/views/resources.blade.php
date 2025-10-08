@extends('layouts.app')

@section('title', 'Resources - Campus Resource Sharing Network')

@section('content')
    <div class="text-overlay">
        <h1>Available Resources</h1>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">Resource ID</th>
                        <th scope="col">Name of Items</th>
                        <th scope="col">Category</th>
                        <th scope="col">Owner</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>001</td>
                        <td>Introduction to Programming</td>
                        <td>Book</td>
                        <td>Dr. Juan Dela Cruz</td>
                        <td><a href="#" class="btn btn-custom btn-sm">Request</a></td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>Calculus Notes</td>
                        <td>Notes</td>
                        <td>Ms. Maria Santos</td>
                        <td><a href="#" class="btn btn-custom btn-sm">Request</a></td>
                    </tr>
                    <tr>
                        <td>003</td>
                        <td>Projector</td>
                        <td>Equipment</td>
                        <td>Mr. Pedro Reyes</td>
                        <td><a href="#" class="btn btn-custom btn-sm">Request</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection