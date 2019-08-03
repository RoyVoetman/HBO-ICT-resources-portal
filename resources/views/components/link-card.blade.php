<div class="col-md-4">
    <div class="card mb-3">
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <h5 class="card-title">{{ $slot }}</h5>
                <footer class="blockquote-footer">{{ $footer }}</footer>
            </blockquote>
        </div>
        <div class="card-footer">
            <a href="{{ $url }}"{{ isset($newTab) ? ' target="_blank"' : null }} class="card-link">Get discount</a>
        </div>
    </div>
</div>