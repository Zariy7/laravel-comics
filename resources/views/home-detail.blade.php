@extends('layout.app')

@section('content')

<div class="container">
    <div class="w-25">
        <img src="{{$focus['thumb']}}" class="w-50">
    </div>
    <div class="row">
        <div class="col-8">
            <h1>
                {{$focus['title']}}
            </h1>

            <div class="d-flex justify-content-between bg-success text-white">
                <div class="d-flex justify-content-between w-75 px-2">
                    <div>
                        U.S. Price: {{$focus['price']}}
                    </div>
                    <div>
                        AVAILABLE
                    </div>
                </div>
                <div class="btn btn-success">
                    Check Availability
                </div>
            </div>

            <p>
                {{$focus['description']}}
            </p>
        </div>

        <div class="col-6">
            <h3>
                Talent
            </h3>
            <hr>
            <div class="d-flex justify-content-between">
                <div>
                    Art By: 
                </div>
                <div>
                    Lorem Ipsum
                </div>
            </div>
            <hr>
            <div class="d-flex justify-content-between">
                <div>
                    Written By: 
                </div>
                <div>
                    Dolor Sit Amet
                </div>
            </div>
            <hr>
        </div>

        <div class="col-6">
            <h3>
                Specs
            </h3>
            <hr>
            <div class="d-flex justify-content-between">
                <div>
                    Series: 
                </div>
                <div>
                    {{$focus['series']}}
                </div>
            </div>
            <hr>
            <div class="d-flex justify-content-between">
                <div>
                    U.S. Price: 
                </div>
                <div>
                    {{$focus['price']}}
                </div>
            </div>
            <hr>
            <div class="d-flex justify-content-between">
                <div>
                    On Sale Date:     
                </div>
                <div>
                    {{$focus['sale_date']}}
                </div>
            </div>
            <hr>
        </div>
    </div>
</div>
@endsection