@extends('layouts.app')

@section('content')
<section class="bg-dark ">
    <div class="container p-4">
        <div class="badges py-4">
            <h3 class="text-uppercase text-white bg-primary d-inline p-2">Current series</h3>
        </div>

        <div class="row row-cols-3 row-cols-md-6 g-3">
            @foreach($comics as $comic)
            <div class="col">
                <div class="card-border-0">
                    <div class="card-img">
                        <img src="{{$comic['thumb']}}" alt="" class="w-100 h-100 object-fit-cover">
                    </div>
                    <div class="card-body">
                        <p class="text-white text-uppercase">{{$comic['title']}}</p>

                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center">
            <a href="" class="text-uppercase text-white bg-primary text-decoration-none p-2">learn more</a>
        </div>
    </div>
</section>

<section class="bg-primary">
    <div class="container d-flex justify-content-between py-5">
        <div class="item d-flex align-items-center gap-2">
            <img src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="" width="50px" width="50px">
            <h6 class="text-uppercase text-white">Digital comics</h6>
        </div>
        <div class="item d-flex align-items-center gap-2">
            <img src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="" width="50px">
            <h6 class="text-uppercase text-white">Digital comics</h6>
        </div>
        <div class="item d-flex align-items-center gap-2">
            <img src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="" width="50px">
            <h6 class="text-uppercase text-white">Digital comics</h6>
        </div>
        <div class="item d-flex align-items-center gap-2">
            <img src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="" width="50px">
            <h6 class="text-uppercase text-white">Digital comics</h6>
        </div>

        <div class="item d-flex align-items-center gap-2">
            <img src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="" width="50px">
            <h6 class="text-uppercase text-white">Digital comics</h6>
        </div>
    </div>

</section>

@endsection