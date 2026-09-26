<x-layout>

<header>
    <div class="container-fluid header py-5">
        <div class="row justify-content-center align-items-center">

           
            <div class="col-md-6 d-flex justify-content-center">
                <img src="./media/teamcinema.jpg" class="img-fluid rounded" alt="Team Cinema">
            </div>

            
            <div class="col-md-6 text-white text-center">
                <h2 class="text-color">Chi Siamo</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.  
                    Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
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
