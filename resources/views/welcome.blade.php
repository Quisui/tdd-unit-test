<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
</head>

<body class="bg-gray-200 py-10">
    <div class="max-w-lg bg-white mx-auto p-5 rounded shadow">
        @if ($errors->any())
        <ul class="list-none p-4 mx-auto bg-red-100 text-red-500">
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
        <form action="tags" method="post" class="flex">
            @csrf
            <input type="text" class="rounded-l bg-gray-200 p-4 w-full outline-none" name="name" id="name" aria-describedby="name" placeholder="">
            <button type="submit" class="rounded-r px-8 bg-blue-500 text-white outline-none">Agregar</button>
        </form>
        <h4 class="text-lg text-center mb-4">Tag List</h4>
        <table class="table-auto">
            <tbody>
                @forelse ($tags as $tag)
                <tr class="bg-blue-200">
                    <td>
                        {{$tag->name}}
                    </td>
                    <td>
                        {{$tag->slug}}
                    </td>
                    <td>
                        <form action="tags/{{ $tag->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-3 rounded bg-red-500 text-white">Borrar</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td>No Tags</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>
