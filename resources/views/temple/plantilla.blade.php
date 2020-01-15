<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>ID-PET</title>
    <link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
    <link rel="stylesheet" href="{{ asset('/temple/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/temple/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/temple/css/templatemo-style.css') }}" />
  </head>
  <body>
    @section('head')
    <div class="container-fluid">
      <div class="row tm-brand-row">
        <div class="col-lg-4 col-10">
          <div class="tm-brand-container">
            <div class="tm-brand-texts">
              <h1 class="text-uppercase tm-brand-name">ID PET</h1>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-2 tm-nav-col">
          <div class="tm-nav">
            <nav class="navbar navbar-expand-lg navbar-light tm-navbar">
              <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto mr-0">
                  <li class="nav-item active">
                    <div class="tm-nav-link-highlight"></div>
                  <a class="nav-link" href="{{ route('index') }}">
                    Inicio <span class="sr-only">(current)</span></a
                    >
                  </li>
                  <li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="{{ route('generadorid') }}">Generar ID</a>
                  </li>
                  <li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="{{ route('about') }}">Sobre</a>
                  </li>
                  <li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="{{ route('contact') }}">Contacto</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
      @show

      @yield('content')
     
      <!-- Page footer -->
      <footer class="row tm-page-footer">
        <p class="col-12 tm-copyright-text mb-0">
          Copyright &copy; 2019 Ks-Solutions... 
          
        </p>
      </footer>
    </div>

    <script src="{{ asset('temple/js/jquery.min.js') }}"></script>
    <script src="{{ asset('temple/js/parallax.min.js') }}"></script>
    <script src="{{ asset('temple/js/bootstrap.min.js') }}"></script>
  </body>
</html>