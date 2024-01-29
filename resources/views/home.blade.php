@foreach ($movies as $movie)
    <div class="card">
        <h3>{{ $movie->title }}</h3>
    </div>
@endforeach
  