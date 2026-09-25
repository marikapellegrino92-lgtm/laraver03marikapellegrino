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


   <div class="container-fluid header py-5">
  <div class="row justify-content-center align-items-center">

    <!-- IMMAGINE A SINISTRA -->
    <div class="col-md-6 d-flex justify-content-center">
      <img src="./media/teamcinema.jpg" class="img-fluid rounded" alt="Team Cinema">
    </div>

    <!-- TESTO A DESTRA -->
    <div class="col-md-6 text-white text-center">
      <h2 class="text-color">Chi Siamo</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.  
        Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      </p>
    </div>

  </div>
</div>

            
        </div>
    </div>
</header>

<section>
    <div class="container userHeight">
        <div class="row h-100 justify-content-around align-items-center">

            @foreach ($users as $user)
            <div class="col-12 col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">
                            {{ $user['name'] }} {{ $user['surname'] }}
                        </h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">
                            {{ $user['role'] }}
                        </h6>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the card’s content.
                        </p>
                        <a href="#" class="card-link">Card link</a>
                       <a href="{{ route('aboutUsDetail', ['name' => $user['name']]) }}" class="">leggi di più</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>



   
</x-layout>