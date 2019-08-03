@extends('layouts.master')

@section('title', 'Homepage')

@section('container')
    <section class="notes">

        <main class="mt-5">
            <div class="row">

                @foreach($files as $file)
                    @if(strstr($file, '.') === '.md')
                        <div class="col-md-4">
                            <div class="card mb-3 text-center">
                                <a href="/notes/{{$schoolYear}}/{{$class}}/{{$author}}/{{$resource}}/{{strstr($file, '.', true)}}">
                                    <div class="py-3"><i class="fas fa-file text-black-50" style="font-size: 145px;"></i></div>
                                    <div class="card-footer text-muted m-0">
                                        <p class="mb-0">{{ $file }}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </main>
    </section>
@endsection
