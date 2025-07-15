@foreach ($movies as $movie)
    <div class="col-md-20 col-6">
        <a href="{{ route('movies.show', $movie->slug) }}">
            <div class="mb-4 card">
                <img src="{{ $movie->poster }}" alt="..." class="card-image-movie-list">
                <span class="badge rounded-pill text-bg-dark badge-rating">
                    <img class="star-rating" src="{{ asset('assets/img/star-rating.png') }}" alt="...">
                    ({{ $movie->average_rating }})
                </span>
            </div>
        </a>
    </div>
@endforeach
