<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
    </head>
    <body>
            <div class="content">
                <div class="title m-b-md">
                    Hello World!
                </div>

                <h2>
                    <a href=" {{ route ('about') }}">Scorpi di piu</a>
                </h2>
            </div>
        </div>
    </body>
</html>
