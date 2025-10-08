<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        $title = 'Welcome to CRSN';
        $description = 'Empower Your Campus Community! The Campus Resource Sharing Network connects students, faculty, and staff to share books, equipment, and notes effortlessly. Join now to unlock a world of resources.';
        return view('home', compact('title', 'description'));
    }

    public function about()
    {
        $scope = 'This system covers resource listing, sharing requests, and user profiles, enabling a seamless platform for tracking and managing available resources such as textbooks, equipment, and study notes. It does not handle payments, financial transactions, or resources located off-campus, focusing solely on internal campus collaboration to maintain simplicity and security.';
        $overview = 'Built for Camarines Sur Polytechnic Colleges to foster collaboration and enhance resource accessibility across the campus community. Users include a diverse group of Students, Faculty, and Staff, all of whom can contribute to and benefit from the shared network, promoting an inclusive and supportive learning environment.';
        return view('about', compact('scope', 'overview'));
    }

    public function resources()
    {
        $resources = [
            ['name' => 'Textbook: Introduction to Laravel', 'type' => 'Book', 'owner' => 'Richard F. Nonato', 'available' => 'Yes'],
            ['name' => 'Laptop Charger', 'type' => 'Equipment', 'owner' => 'Student Council', 'available' => 'No'],
        ];
        return view('resources', ['title' => 'Available Resources', 'resources' => $resources]);
    }

    public function contact()
    {
        return view('contact')->with('title', 'Contact Us');
    }

    public function login()
    {
        return view('login')->with('title', 'Login');
    }

    public function register()
    {
        return view('register')->with('title', 'Register');
    }
}