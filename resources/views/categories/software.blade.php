@extends('layouts.category')

@section('category-container')
    <ul>
        @foreach(config('software')['software'] as $software)
            @if(isset($software['header']))
                <div class="col-md-12">
                    <h3 class="pt-3">{{ $software['header'] }}</h3>
                </div>
            @else
                <li><a href="{{ $software['link'] }}">{{ $software['name'] }}</a></li>
            @endif
        @endforeach
    </ul>
@endsection
