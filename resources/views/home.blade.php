<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container">
        <div class="row mt-5 gx-5 gy-4 justify-content-between">
          @foreach ($movies as $movie)
            <div class="col-12 col-xl-3 col-lg-4 col-md-6">
                <div class="card m-auto" style="width: 18rem;">
                    <div class="card-body">
                        <h4 class="card-title">{{$movie->title}}</h4>
                        <h6 class="card-text">Original - title: {{$movie->original_title}}</h6>
                        <p class="card-text">Nationality: {{$movie->nationality}}</p>
                        <p class="card-text">Vote: <strong>{{$movie->vote}}</strong></p>
                        <p class="card-text">Exit date: <strong>{{$movie->date}}</strong></p>
                    </div>
                </div>
            </div>
             @endforeach 
        </div>
    </div>
</body>

</html>
