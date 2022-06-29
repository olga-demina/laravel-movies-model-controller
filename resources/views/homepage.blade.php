<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Pagina home</h1>
    {{-- {{ dd($movies) }} --}}
    @foreach ($movies as $movie)
        <div>
            <h3>{{ $movie->title }}</h3>
            <p>{{ $movie->original_title }}</p>
        </div>
    @endforeach

</body>
</html>