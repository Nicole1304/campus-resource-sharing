@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <h1>About Us</h1>
    <div style="display: flex; justify-content: space-around; flex-wrap: wrap;">
        <div style="flex: 1; min-width: 300px; margin: 10px; padding: 20px; background: rgba(36, 84, 172, 0.8); border-radius: 10px;">
            <h2 style="color: white;">SCOPE</h2>
            <p style="color: white;">This system covers resource listing, sharing requests, and user profiles, enabling a seamless platform for tracking and managing available resources such as textbooks, equipment, and study notes. It does not handle payments, financial transactions, or resources located off-campus, focusing solely on internal campus collaboration to maintain simplicity and security.</p>
        </div>
        <div style="flex: 1; min-width: 300px; margin: 10px; padding: 20px; background: rgba(36, 84, 172, 0.8); border-radius: 10px;">
            <h2 style="color: white;">OVERVIEW</h2>
            <p style="color: white;">Built for Camarines Sur Polytechnic Colleges to enhance resource accessibility across the campus community. Users include a diverse group of Students, Faculty, and Staff, all of whom can contribute to and benefit from the shared network, promoting an inclusive and supportive learning environment.</p>
        </div>
    </div>
@endsection