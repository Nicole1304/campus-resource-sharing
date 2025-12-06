<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CRSN') - Campus Resource Sharing Network</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            background: linear-gradient(rgba(0,0,50,0.85), rgba(70,0,130,0.9)), url('/images/HOME PAGE.png') center/cover no-repeat fixed;
            color: white;
            min-height: 100vh;
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            flex-direction: column;
        }
        .footer {
            background: #2454AC;
            padding: 15px 0;
            margin-top: auto;
            text-align: center;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

    {{-- YOUR PERFECT NAVBAR --}}
    @include('layouts.navigation')

    {{-- ALL PAGE CONTENT GOES HERE --}}
    <main class="flex-grow-1">
        <div class="container py-4">
            @yield('content')
        </div>
    </main>

    {{-- FOOTER --}}
    <footer class="footer">
        © 2025 Camarines Sur Polytechnic Colleges – CCIT 106 Midterm Project<br>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>