@extends('layouts.app')

@section('content')

<div class="banner_img bg-primary">
    <div class="container">
        <img src="{{$firstComic['thumb']}}" alt="" width="150px">
    </div>

</div>

<div class="container py-5">
    <div class="row">
        <div class="col-8">
            <div class="card border-0">
                <div class="card-title">
                    <h4 class="text-uppercase text-center">{{$firstComic['title']}}</h4>
                    <div class="card-body">
                        <p>{{$firstComic['description']}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="">
        </div>
    </div>
</div>




@endsection