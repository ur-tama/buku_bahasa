<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    nav {
        font-family: 'Poppins', sans-serif;
    }

    .navbar-brand img {
        width: 50px;
        height: auto;
    }
</style>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow">
        <div class="container fw-bold">
            <a class="navbar-brand" href="/" aria-label="Homepage">
                <img src="https://i.pinimg.com/736x/3a/e3/8f/3ae38f3d9944404e556a6db3ed91932b.jpg"
                    alt="Brand Logo">Berita     
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto fw-bold">
                    @if (!Auth::check())
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile') }}">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('users') }}">User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile') }}">Data Warga</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">Data RT/RW</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Data Surat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categories') }}">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('posts') }}">Posts</a>
                    </li>
                    @endif
                </ul>
                <div class="d-flex">
                    @if (!Auth::check())
                    <a href="{{ route('signup') }}" class="btn btn-dark me-2 fw-bold">Signup</a>
                    <a href="{{ route('signin') }}" class="btn btn-dark fw-bold">Signin</a>
                    @else
                    <a href="{{ route('logout') }}" class="btn btn-dark fw-bold">Logout</a>
                    @endif
                </div>
            </div>
        </div>
    </nav>
</header>
