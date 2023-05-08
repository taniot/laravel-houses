<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
         @vite('resources/js/app.js')
    </head>
    <body>
        <div class="container">
            <h1>My Houses</h1>
            <ul>
                @foreach ($houses as $house)
                    <li>{{ $house->reference }} - {{ $house->is_available }}</li>
                @endforeach
            </ul>

        </div>

    </body>
</html>
