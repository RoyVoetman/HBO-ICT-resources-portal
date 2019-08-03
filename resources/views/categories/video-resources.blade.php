@extends('layouts.category')

@section('category-container')

    <div class="row">
        @foreach(config('video-resources')['playlists'] as $listItem)
            @if(isset($listItem['header']))
                <div class="col-md-12">
                    <h3 class="pt-3">{{ $listItem['header'] }}</h3>
                </div>
            @else
                <div class="col-md-4 mb-3">

                    <div class="card h-100">
                        <div class="video-container">
                            <div class="text-center loading">Loading <i class="fas fa-circle-notch fa-spin text-black-50"></i></div>
                            <iframe frameborder="0" class="lazyload" allowfullscreen="allowfullscreen"
                                    data-src="https://www.youtube.com/embed/videoseries?list={{ $listItem['listId'] }}">
                            </iframe>
                        </div>
                        <div class="card-footer text-muted h-100">
                            <p>{{ $listItem['name'] }}</p>
                        </div>
                    </div>

                </div>
            @endif
        @endforeach
    </div>

@endsection