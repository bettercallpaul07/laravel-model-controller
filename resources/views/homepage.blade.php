<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movies</title>



        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>

        <main>
            <div class="container">
                <div class="row pt-5 pb-5">
                    <div class="col h1 text-center">Movies</div>
                </div>

                
                <div class="row g-4">

                        @foreach ($movies as $item)

                        <div class="col-4 col-sm-4 col-md-4">
                            <div class="movie-card">
                                <div class="title">
                                    {{ $item->title}}
                                </div>
                                <div class="movie-info">
                                    <div>
                                        <i class="fa-solid fa-globe"></i>
                                        {{ $item->nationality}}   
                                    </div>
                                    <div>
                                        <i class="fa-regular fa-calendar"></i>
                                        {{ $item->date}}   
                                    </div>
                                    <div>
                                        <i class="fa-regular fa-star"></i>
                                       {{ $item->vote}}   
                                    </div>
                                </div>
                            </div>


                        </div>

                   
                            
                        @endforeach


                    </div>
                </div>
        </main>

    </body>
</html>
