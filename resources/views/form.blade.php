
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .pagination li{
            display:inline-block;
        }
    </style>

</head>
<body>

@if ($book->id)

        {{-- Se for um livro que já existe --}}
        <form action="{{route("update", $book)}}" method="post">
            @method('PUT')

    @else
        {{-- Se não, quer dizer que estou criando um novo --}}
        <form action="{{route("save")}}" method="post">

    @endif

    @csrf
    <label for="title">Título:</label>
    <input type="text" name="title" required value="{{$book->title}}">

    <label for="publisher">Editora:</label>
    <input type="text" name="publisher" value="{{$book->publisher}}">

    <label for="year">Ano:</label>
    <input type="number" name="year" value="{{$book->year}}">

    <label for="date_of_something">Data:</label>
    <input type="date" name="date_of_something" value="{{$book->date_of_something}}">

    <label for="genre">Gênero:</label>
    <select name="genre">
    <option value="horror" {{ $book->genre == 'horror' ? 'selected' : '' }}>Terror</option>
    <option value="drama" {{ $book->genre == 'drama' ? 'selected' : '' }}>Drama</option>
    <option value="romance" {{ $book->genre == 'romance' ? 'selected' : '' }}>Romance</option>
</select>

    <p>Formato Preferido:</p>
    <label>
        <input type="radio" name="format" value="fisico" {{ $book->format == 'fisico' ? 'checked' : '' }}> Livro físico
    </label><br>
    <label>
        <input type="radio" name="format" value="ebook" {{ $book->format == 'ebook' ? 'checked' : '' }}> E-book
    </label><br>
    <label>
        <input type="radio" name="format" value="kindle" {{ $book->format == 'kindle' ? 'checked' : '' }}> Kindle
    </label><br>
    <label>
        <input type="radio" name="format" value="audiolivro" {{ $book->format == 'audiolivro' ? 'checked' : '' }}> Audiolivro
    </label><br>

    <button type="submit">Salvar</button>
    <ul>
    @foreach ($list as $item)
        <li>
            <a href="{{route('edit', $item)}}">Editar</a>

            {{$item->title}}
            {{$item->year}}
            {{$item->publisher}}
            {{$item->genre}}
            {{$item->format}}
            <a href="{{route('delete', $item)}}">Deletar</a>
        </li>
    @endforeach
    </ul>
    {{$list->links()}}






</body>
</html>
