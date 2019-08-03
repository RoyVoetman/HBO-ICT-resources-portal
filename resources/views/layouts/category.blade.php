@extends('layouts.master')

@section('title', $category['name'])

@section('container')
    <section class="category">
        <header class="text-center py-5">
            <i class="{{ $category['icon'] }} mb-4"></i>

            <h1>{{ $category['name'] }}</h1>
        </header>

        <main class="mt-3">
            @yield('category-container')
        </main>
    </section>
@endsection