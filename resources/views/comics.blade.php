@extends('layouts.app')

@section('content')
    <section class="bg-dark ">
        <div class="container p-4">
            <div class="badges py-4">
                <h3 class="text-uppercase text-white bg-primary d-inline p-2">Current series</h3>
            </div>

            <div class="row row-cols-3 row-cols-md-6 g-3">
                @foreach ($comics as $index => $comic)
                    <div class="col">
                        <a href="/comics/{{ $index }}">
                            <div class="card-border-0">
                                <div class="card-img">
                                    <img src="{{ $comic['thumb'] }}" alt="" class="w-100 h-100 object-fit-cover">
                                </div>
                                <div class="card-body">
                                    <p class="text-white text-uppercase">{{ $comic['title'] }}</p>

                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="text-center">
                <a href="" class="text-uppercase text-white bg-primary text-decoration-none p-2">learn more</a>
            </div>
        </div>
    </section>

   
@endsection
