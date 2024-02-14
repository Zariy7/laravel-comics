@extends('layout.app')

@section('content')
<img src="{{$focus['thumb']}}" alt="">
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>
                {{$focus['title']}}
            </h1>

            <div>
                {{$focus['price']}}
            </div>

            <p>
                {{$focus['description']}}
            </p>
        </div>

        <div class="col-6">
            <h3>
                Talent
            </h3>
        </div>

        <div class="col-6">
            <h3>
                Specs
            </h3>
            <div>
                {{$focus['series']}}
            </div>
            <div>
                {{$focus['price']}}
            </div>
            <div>
                {{$focus['sale_date']}}
            </div>
        </div>
    </div>
</div>
@endsection