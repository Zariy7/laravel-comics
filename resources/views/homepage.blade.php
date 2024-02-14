@extends('layout.app')

@section('content')
    <div class="bg-gray">
        <div class="jumbo-container">
            <img src="{{ Vite::asset('resources/img/jumbotron.jpg')}}" class="jumbo">
        </div>
        <div class="container">
            <div class="row">
                @foreach ($comics as $issue)
                <div class="comic-col">
                    <a href="{{route('home-detail', ['param' => $issue['id']])}}">
                        <img src="{{ $issue['thumb'] }}" class="comic-img">
                        <div class="comic-title">
                            {{ $issue['series'] }}
                        </div>
                    </a>
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
@endsection