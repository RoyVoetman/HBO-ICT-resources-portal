@extends('layouts.category')

@section('category-container')

    @inject('videoInfo', 'App\Services\VideoInfoService')

    <div class="row">
        @foreach($videoInfo->get('channels') as $channel)
            @if(isset($channel['header']))
                <div class="col-md-12">
                    <h3 class="pt-3">{{ $channel['header'] }}</h3>
                </div>
            @else
                <div class="col-md-3 mb-3">
                    <div class="card h-100" data-aos="{{ Arr::random(['fade-up', 'fade-down', 'fade-right', 'fade-left']) }}">
                        <div class="image-container">
                            <a href="{{ $channel['url'] }}">
                                <img src="{{ $channel['image'] }}" alt="{{ $channel['title'] }}">
                            </a>
                        </div>
                        <div class="card-footer text-muted h-100">
                            <p>{{ $channel['title'] }}</p>
                        </div>
                    </div>

                </div>
            @endif
        @endforeach

        @foreach($videoInfo->get('playlists') as $playlist)
            @if(isset($playlist['header']))
                <div class="col-md-12">
                    <h3 class="pt-3">{{ $playlist['header'] }}</h3>
                </div>
            @else
                <div class="col-md-4 mb-3">

                    <div class="card h-100" data-aos="{{ Arr::random(['fade-up', 'fade-down', 'fade-right', 'fade-left']) }}">
                        <div class="video-container">
                            <div class="text-center loading">Loading <i class="fas fa-circle-notch fa-spin text-black-50"></i></div>
                            <iframe frameborder="0" class="lazyload" allowfullscreen="allowfullscreen" data-src="{{ $playlist['src'] }}"></iframe>
                        </div>
                        <div class="card-footer text-muted h-100">
                            <p>{{ $playlist['title'] }}</p>
                        </div>
                    </div>

                </div>
            @endif
        @endforeach
    </div>

@endsection
