<section>
    <div class="film-container row g-3">
        @foreach ($movies as $movie)
            <div class="col-6 col-sm-4 col-md-3">
                <div class="film-card">
                    <div class="title-vote">
                        <h1>{{ $movie->title }}</h1>
                        <h4 class="fs-6">{{ $movie->original_title}}</h4>
                        <span class="vote">
                            @for ($i = 0; $i < round(($movie->vote) / 2); $i++)
                                ⭐️
                            @endfor
                        </span>
                    </div>
                    <p class="nation-date">{{ $movie->nationality }} - {{ substr($movie->date, 0, -6) }}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>
