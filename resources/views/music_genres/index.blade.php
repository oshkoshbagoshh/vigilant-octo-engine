@extends('layouts.app')
@section('content')

    <h2> Popular Music Channels </h2>


    <ul>
        @foreach ($genres as $genre)
            <li>
                <strong>{{ $genre->name }}</strong>: {{ $genre->description }}
            </li>
        @endforeach
    </ul>

@endsection