<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    {{-- *Cuando la realación es 1 a 1 --}}
    {{-- <h1>{{ $user->email }}</h1>

    <h1>Prefix: {{ $user->phone->prefix }}</h1>
    <h1>Phone number: {{ $user->phone->phone_number }}</h1> --}}


    {{-- *Cuando la relación es 1 a muchos se itera --}}
    {{-- <h1>{{ $user->name }} phones:</h1>
    <ul>
        @forelse ($user->phones as $phone)
            <li>{{ $phone->prefix }} {{ $phone->phone_number }}</li>
        @empty
            <li>Empty</li>
        @endforelse
    </ul> --}}

    {{-- <h1>{{ $user->name }} roles:</h1>
    <h1>{{ $user->phoneSim->company }}</h1>
    <ul>
        @forelse ($user->roles as $role) --}}
    {{-- * Para agregar los campos adicionales se debe de hacer por medio de pivot --}}
    {{-- <li>{{ $role->name }} - Added by: {{ $role->pivot->added_by }}</li>
        @empty
            <li>Empty</li>
        @endforelse
    </ul> --}}

    <h1>{{ $user->image->url }}</h1>
</body>

</html>
