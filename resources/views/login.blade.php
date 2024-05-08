@extends('layouts.app')

@section('content')

    <div class="my-4 d-flex flex-column aling-items-center justify-content-center w-50 mx-auto py-5">
        <h1 class="text-center py-4">Login</h1>
        <input type="text" placeholder="inser your email" class="w-25 my-1 mx-auto no_outline border-0 text-center">
        <input type="password" placeholder="inser your password" class="w-25 my-1 mx-auto no_outline border-0 text-center">
        <button class="btn btn-primary w-25 my-4 mx-auto">Login</button>
    </div>
@endsection
