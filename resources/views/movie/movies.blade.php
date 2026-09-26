<x-layout>

    <header>
        <div class="container-fluid movies">
            <div class="row justify-content-center">
                
                <div class="col-12">
                    <h2 class="display-5 text-white text-center text-color">tutti i nostri film</h2>
                </div>

                @foreach ($movies as $movie)
                    <div class="col-12 col-md-3 my-3">
                        <x-card :movie="$movie" />
                    </div>
                @endforeach

            </div>
        </div>
    </header>

</x-layout>
