<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <a href="{{ route('create') }}">Create</a>
    <h3>Infos</h3>
    @forelse ($infos as $info)
        <div>
            <h4>{{ $info->name }}</h4>
            @if ($info->file_uri)
                <img src="{{ asset('storage/images/' . $info->file_uri) }}" alt="{{ $info->name }}"
                    style="max-width: 200px;">
            @else
                <p>No file uploaded</p>
            @endif
        </div>
        <hr>

    @empty
        <div>
            <h4>No info available.</h4>
        </div>
    @endforelse
</body>

</html>
