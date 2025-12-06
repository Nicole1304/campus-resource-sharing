{{-- resources/views/layouts/navigation.blade.php --}}
<nav class="navbar navbar-expand-lg" style="background: rgba(255,255,255,0.95); backdrop-filter: blur(10px);">
    <div class="container">
        <a class="navbar-brand fw-bold fs-4" href="{{ route('home') }}">
            <img src="{{ asset('images/crsn-logo.png') }}" height="50" alt="CRSN">
            <span class="ms-2 text-primary">CRSN</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                @auth
                    <li class="nav-item"><a class="nav-link text-primary fw-600" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-primary fw-600" href="{{ route('resources.index') }}">Resources</a></li>
                    <li class="nav-item"><a class="nav-link text-primary fw-600" href="{{ route('about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link text-primary fw-600" href="{{ route('contact') }}">Contact</a></li>
                    <li class="nav-item"><a class="nav-link text-primary fw-600" href="{{ route('borrow.myrequests') }}">My Requests</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-primary fw-bold" href="#" role="button" data-bs-toggle="dropdown">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <form method="POST" action="{{ route('logout') }}" class="m-0">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link text-primary fw-bold" href="{{ route('login') }}">Login</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>