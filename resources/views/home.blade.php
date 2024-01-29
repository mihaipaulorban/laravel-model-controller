<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Film</title>
    @vite ('resources/js/app.js')

</head>
<body>

<header>
    <h1>La Nostra Collezione di Film</h1>
</header>

<main class="movies-container">
    @foreach ($movies as $movie)
        <div class="card">
            <h2>{{ $movie->title }}</h2>
            <p>Titolo originale: {{ $movie->original_title }}</p>
            <p>Nazionalità: {{ $movie->nationality }}</p>
            <p>Data di uscita: {{ \Carbon\Carbon::parse($movie->date)->format('d-m-Y') }}</p>
            <p>Voto: {{ $movie->vote }}</p>
        </div>
    @endforeach
</main>

<footer>
    <p>&copy; {{ date('Y') }} I diritti sui film appartengono ai rispettivi proprietari.</p>
</footer>

</body>
</html>