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


    <div class="container">
        <div class="row">
            <div class="col-12">
                I nostri films!
            </div>

            @forelse ($movies as $movie)
                <div class="col-4">
                    <div class="card">
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
