<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - CRSN</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('/images/HOME PAGE.png'); 
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat; 
            color: #FFFFFF;
            font-family: Arial, sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .container {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 10px;
            text-align: center;
            font-size: 1.1rem; 
        }
        .container h1 { 
            font-size: 3rem; 
            margin-bottom: 1rem;
            font-weight: bold;
        }
        .container p { 
            font-size: 1.4rem; 
            line-height: 1.6; 
            margin-bottom: 2rem;
            text-align: center;
        }
        .navbar {
            background-color: #fffefeff;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-radius: 0 0 10px 10px;
        }
        .navbar img {
            height: 50px; 
        }
        .navbar ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }
        .navbar ul li {
            margin: 0 25px;
        }
        .navbar ul li a {
            color: #2454AC;
            text-decoration: none;
            font-weight: bold;
            font-size: 16px;
        }
        .footer {
            background-color: #2454AC;
            padding: 1px;
            text-align: center;
            border-radius: 10px 10px 0 0;
            margin-top: auto;
        }
        .content-box {
            background-color: #D9D9D9(25, 118, 210, 0.7);
            padding: 20px;
            border-radius: 15px;
            width: 100%;
            max-width: 500px;
        }
        .btn-custom {
            background-color: #FFFFFF;
            color:#2454AC;
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-size: 1.2rem; 
            font-weight: bold;
        }
        table {
            width: 100%; 
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 1.1rem; 
        }
        th, td {
            border: 1px solid #FFFFFF;
            padding: 12px 16px; 
            text-align: left;
            min-width: 150px; 
        }
        th {
            background-color: #D3D3D3;
            color: #000000;
            font-weight: bold;
            font-size: 1.2rem; 
        }
        tr:hover {
            background-color: rgba(255, 255, 255, 0.1); 
        }
        input, textarea {
            background-color: #D3D3D3;
            border: none;
            padding: 10px;
            border-radius: 20px;
            width: 100%;
            margin: 10px 0;
        }
</style>
</head>
<body>
    <nav class="navbar">
        <img src="{{ asset('images/crsn-logo.png') }}" alt="CRSN Logo"> 
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('resources') }}">Resources</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
        </ul>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer class="footer">
        <p>© 2025 Camarines Sur Polytechnic Colleges - CCIT 106 Project</p>
    </footer>
</body>
</html>