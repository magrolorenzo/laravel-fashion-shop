<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>
            Laravel Fashion Shop
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <section>
            <div class="container">
                @foreach ($dresses as $dress)
                    <p>
                        {{$dress}}
                    </p>
                @endforeach
            </div>
        </section>

    </body>
</html>
