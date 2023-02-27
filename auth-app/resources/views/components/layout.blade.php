<html>
<head>
    @include('components.head')
  <header>

    <style>
      .carousel-item {
        height:30rem;
        background: #777;
        color: white;
        position:relative;
        background-position: top;
        background-size: cover;
        opacity: 0.8;
      }
    </style>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/images/Layout.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/images/Layout_1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/images/Layout_2.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </header>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
        <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a href="{{ url('admin/recipes/index') }}" class="nav-link text-white bg-dark" aria-current="page">Recipes</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('admin/categories/index') }}" class="nav-link text-white bg-dark" aria-current="page">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('admin/ingredients/index') }}" class="nav-link text-white bg-dark" aria-current="page">Ingredients</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item">    
                        @auth
                        <a href="{{ route('logout') }}" class="btn btn-outline-light" aria-current="page">Logout</a> 
                        @endauth
                    </li>
                    @guest
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link text-warning" aria-current="page">Register</a> 
                    </li>  
                    <br>
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="btn btn-outline-light" aria-current="page">Login</a>
                    </li>    
                     @endguest
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
<footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="{{ url('recipes') }}" class="nav-link px-2 text-muted">All Recipes</a></li>
        <li class="nav-item"><a href="{{ url('/') }}" class="nav-link px-2 text-muted">New Recipes</a></li>
    </ul>
    <p class="text-center text-muted">&copy; 2023 Made by IngaNE</p>
</footer>
</html> 