<div class="col-md-4">
    <div class="card h-100 shadow-sm">
        <img src="{{ asset($imagePath) }}" class="card-img-top" alt="{{ $alt }}">
        <div class="card-body">
            <h5 class="card-title">{{ $title }}</h5>
            <p class="card-text">{{ $text }}</p>
            <a href="{{ $link }}" class="btn btn-outline-{{ $buttonStyle ?? 'primary' }} w-100 mt-2">{{ $buttonText }}</a>
        </div>
    </div>
</div>