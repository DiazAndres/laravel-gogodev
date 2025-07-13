@extends('layouts.app')

@section('content')
    <div class="container">

        @forelse ($products as $product)
            <div class="card">
                <h3>{{ $product->name }}</h3>
                <p>{{ $product->short_description }}</p>
                <p>{{ $product->price }} USD</p>
            </div>
        @empty
            <h3>No data.</h3>
        @endforelse
    </div>
@endsection
