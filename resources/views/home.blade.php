<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <div class="container-fluid bg-dark">
        <div class="row">
            <div class="col-12">
                <div class="logo text-center p-4">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Blockbuster_logo.svg/2560px-Blockbuster_logo.svg.png" alt="">
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid my-container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="p-3">
                    I nostri Film!
                </h1>
            </div>

            @forelse ($movies as $movie)
                <div class="col-4 p-4">
                    <div class="card bg-dark text-light text-center">
                        <h1>
                            {{$movie->title}}
                        </h1>
                        <h2>
                            {{$movie->original_title}}
                        </h2>
                        <h2>
                            {{$movie->nationality}}
                        </h2>
                        <h4>
                            {{$movie->date}}
                        </h4>
                        <h4>
                            {{$movie->vote}}
                        </h4>
                    </div>
                </div>
            @empty
                
            @endforelse
        </div>
    </div>

</body>

</html>
