@extends('layouts.master')

@section('title', 'Homepage')

@section('container')
    <section class="home">
        <header class="text-center py-5">
            <i class="fas fa-book-open mb-4"></i>

            <h1>Hanze HBO-ICT resource library</h1>
        </header>

        <main class="mt-5">
            <div class="row">

                @foreach($categories as $index => $category)
                    <div class="col-md-4">
                        <div class="card mb-3 position-relative{{ $index % 2 === 1 ? ' bg-primary' : null }}{{ isset($category['is_pro']) ? ' pro-card' : null }}">
                            <i class="fas fa-star d-none pro-icon"></i>

                            <a class="card-link" href="{{ $category['route'] }}">
                                <div class="card-header">
                                    <i class="{{ $category['icon'] }}"></i>
                                </div>
                                <div class="card-body">
                                    <p class="card-text text-center">{{ $category['name'] }}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </main>
    </section>
@endsection