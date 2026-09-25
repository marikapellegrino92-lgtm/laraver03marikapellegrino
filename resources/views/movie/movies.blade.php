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
  <div class="container-fluid movies">
    <div class="row justify-content-center">
      
      <div class="col-12">
        <h2 class="display-5 text-white text-center text-color">tutti i nostri film</h2>
      </div>

      @foreach ($movies as $movie)
      <div class="col-12 col-md-3 my-3">
        <x-card 
        :movie='$movie'
       title="{{ $movie['title'] }}"
        />
      </div>
      @endforeach

    </div>
  </div>
</header>

</x-layout>