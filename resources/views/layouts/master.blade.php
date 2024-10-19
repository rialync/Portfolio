<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Portfolio')</title> 
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    <header>
        <h1>MY PORTFOLIO</h1>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">HOME</a></li>
                <li><a href="{{ route('about') }}">ABOUT</a></li>
                <li class="dropdown">
                    <a href="#" class="dropbtn">LABORATORY</a>
                    <div class="dropdown-content">
                        <a href="{{ route('framework') }}">FRAMEWORK</a>
                        <a href="{{ route('routing') }}">ROUTING</a>
                        <a href="{{ route('layout') }}">LAYOUT</a>
                        <a href="{{ route('middleware') }}">MIDDLEWARE</a>
                    </div>
                </li>
                <li><a href="{{ route('contact') }}">CONTACT</a></li>
            </ul>
        </nav>
    </header>

    <div class="content">
        @yield('content') 
    </div>

    <footer>
        <p>&copy; 2024 My Portfolio. All rights reserved.</p>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
