@extends('layouts.category')

@section('category-container')
    <div class="row">
        <!-- Resources -->
        @if(array_has($_GET, ['schoolYear', 'class', 'author']))

            @foreach(config('notes.resources') as $resources)
                @component('components.folder-card', ['url' => "/notes/{$_GET['schoolYear']}/{$_GET['class']}/{$_GET['author']}/{$resources}"])
                    {{ $resources }}
                @endcomponent
            @endforeach

        <!-- Authors -->
        @elseif(array_has($_GET, ['schoolYear', 'class']))

            @foreach(config('notes.authors') as $author)
                @component('components.folder-card', ['url' => "/notes?schoolYear={$_GET['schoolYear']}&class={$_GET['class']}&author={$author}"])
                    {{ $author }}
                @endcomponent
            @endforeach

        <!-- Classes -->
        @elseif(array_has($_GET, ['schoolYear']))

            @foreach(config('notes.classes')[$_GET['schoolYear']] ?? [] as $class)
                @component('components.folder-card', ['url' => "/notes?schoolYear={$_GET['schoolYear']}&class={$class}"])
                    {{ $class }}
                @endcomponent
            @endforeach

        <!-- School Years -->
        @else

            @foreach(config('notes.schoolYears') as $schoolYear)
                @component('components.folder-card', ['url' => "/notes?schoolYear={$schoolYear}"])
                    {{ __("notes.$schoolYear") }}
                @endcomponent
            @endforeach

        @endif
    </div>
@endsection