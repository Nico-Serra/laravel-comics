@extends('layouts.app')

@section('content')
    <div class="banner_img bg-primary">
        <div class="container">
            <img src="{{ $comic['thumb'] }}" alt="" width="150px">
        </div>

    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-8">
                <div class="card border-0">
                    <div class="card-title">
                        <h3 class="text-uppercase text-center">{{ $comic['title'] }}</h3>
                        <div class="card-bottom bg-success text-white d-flex justify-content-between p-2">
                            <span>price: <strong>{{ $comic['price'] }}</strong></span>
                            <span class="text-uppercase">
                                available
                            </span>
                        </div>
                        <div class="card-body">
                            <p>{{ $comic['description'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
            </div>
        </div>
    </div>

    <section class="bg-light">
        <div class="container py-5">
            <div class="row">
                <div class="col text-center pb-5">
                    <h4 class="border-bottom text-center py-4">Info</h4>
                    <div>Price: <strong>{{ $comic['price'] }}</strong></div>
                    <div>Sales date: <strong>{{ $comic['sale_date'] }}</strong></div>
                    <div>Type: <strong>{{ $comic['type'] }}</strong></div>
                </div>
            </div>
        </div>
    </section>
@endsection
