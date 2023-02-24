<html>
<head>
    @include('components.head')
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">SAKARTVELO FOOD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a href="{{ url('recipes') }}" class="nav-link" aria-current="page">All Recipes</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item">    
                    @auth
                        <a href="{{ route('logout') }}" class="nav-link" aria-current="page">Logout</a>    
                    @endauth
                    </li>
                    @guest
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link" aria-current="page">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link" aria-current="page">Register</a> 
                    </li>      
                     @endguest
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>
    <br>
    
    <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="{{ url('recipes') }}" class="nav-link px-2 text-muted">Recipes</a></li>
        <li class="nav-item"><a href="{{ url('categories') }}" class="nav-link px-2 text-muted">Categories</a></li>
        <li class="nav-item"><a href="{{ url('ingredients') }}" class="nav-link px-2 text-muted">Ingredients</a></li>
    </ul>
    <p class="text-center text-muted">&copy; 2023 Made by IngaNE</p>
</footer>

    <!-- <footer class="PY-3 MY-4">
        &copy 2023 Made by IngaNE
    </footer> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html> 