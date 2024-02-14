<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        @vite('resources/js/app.js')
    </head>
    <body>
        @include('_partials.header')
        <main>
            <div class="bg-gray">
                <div class="jumbo-container">
                    <img src="{{ Vite::asset('resources/img/jumbotron.jpg')}}" class="jumbo">
                </div>
                <div class="container">
                    <div class="row">
                        @foreach ($comics as $issue)
                        <div class="comic-col">
                                <img src="{{ $issue['thumb'] }}" class="comic-img">
                                <div class="comic-title">
                                    {{ $issue['series'] }}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="center-text p-15">
                    <span class="load-btn">
                        LOAD MORE
                    </span>
                </div>
            </div>
        </main>
        @include('_partials.footer')
    </body>
</html>