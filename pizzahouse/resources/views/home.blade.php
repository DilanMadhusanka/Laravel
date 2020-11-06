@extends('layouts.layout')
@section('content')
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
            @endif
        </div>
        @endif

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
        </div>
    @endsection
