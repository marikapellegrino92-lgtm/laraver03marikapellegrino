<x-layout>


<nav class="navbar navbar-expand-lg bg-dark border-bottom" data-bs-theme="dark">
      <div class="container-fluid">

        <a class="navbar-brand text-light" href="{{route('homepage')}}">
          <i class="bi bi-camera-reels-fill"></i>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="{{ route('homepage') }}">home</a>

            </li>

            <li class="nav-item">
              <a class="nav-link text-light" href="{{route('aboutUs')}}">Chi Siamo</a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-light" href="{{route('contacts')}}">Contatti</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-light" href="#" role="button"
                 data-bs-toggle="dropdown" aria-expanded="false">
                i nostri servizi
              </a>

              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('movie.list')}}">tutti i nostri servizi</a></li>
              </ul>
            </li>

          </ul>
        </div>

      </div>
    </nav>

   
    <header>
      <div class="container-fluid header">
        <div class="row h-100 justify-content-center align-items-center">
         <div class="col-md-6 col-12">
            <h3 class="text-white text-center text-color">{{ $user['name'] }} {{ $user['surname'] }}</h3>
            <h4 class="text-white text-center text-color">{{ $user['role'] }}</h4>

         </div>
        </div>
      </div>
    </header>

    
</x-layout>