@extends('layouts.app')
@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                World Best Pizzas
            </div>
            <p class="msg">{{ session('msg') }}</p>
            <a href="{{ route('pizzas.create') }}">Order a Pizza</a>
        </div>
    </div>
@endsection
