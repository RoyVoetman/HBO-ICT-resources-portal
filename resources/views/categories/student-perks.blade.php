@extends('layouts.category')

@section('category-container')
    <div class="row student-perks">
        @foreach(config('student-perks') as $studentPerk)
            @component('components.link-card', ['url' => $studentPerk['link'], 'newTab' => true])
                {{ $studentPerk['name'] }}
                @slot('footer')
                    {{ $studentPerk['footer'] }}
                @endslot
            @endcomponent
        @endforeach
    </div>
@endsection