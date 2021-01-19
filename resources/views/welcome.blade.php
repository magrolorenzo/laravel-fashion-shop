<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>
            Laravel Fashion Shop
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset("css/app.css")}}">
    </head>
    <body>
        <section>
            <div class="container">
                @foreach ($dresses as $dress)
                    <div class="dress-wrapper capitalized">
                        <h1>{{$dress["name"]}}</h1>
                        <p>Color: {{$dress["color"]}}</p>
                        <p>Size: {{$dress["size"]}}</p>
                    </div>
                @endforeach
            </div>
        </section>

    </body>
</html>
