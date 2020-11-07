@extends('layouts.layout')
@section('content')
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <h1 style="color: white;">Pizza House</h1>
        </div>
        <div>
            @unless($base == 'crust')
                <p>You don't have cheesy crust!</p>
            @endunless
            @php
            $name = 'Shaun';
            echo($name)
            @endphp
        </div>
        <div>
            @for ($i = 0; $i < count($pizza2); $i++)
                <p>{{ $pizza2[$i]['type'] }}</p>
            @endfor
        </div>
        @foreach ($pizza2 as $pizza)
            <ul>
                <li>{{ $loop->index + 1 }} => {{ $pizza['catog'] }}</li>
            </ul>
        @endforeach
    </div>
@endsection
