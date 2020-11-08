@extends('layouts.app')
@section('content')
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <h1 style="color: white;">Pizza House</h1>
        </div>
        @foreach ($pizzas as $pizza)
            <ul>
                <li>{{ $loop->index + 1 }} => {{ $pizza->name }} - {{$pizza->type}} - {{$pizza->base}}</li>
            </ul>
        @endforeach
    </div>
@endsection
