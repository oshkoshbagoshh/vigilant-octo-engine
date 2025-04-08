@extends('layouts.app')
@section('content')


    <h2> Popular Music Channels </h2>

{{--    TODO: make this a chart or HTML Table with links to songs of ours in that genre / tags --}}

    <ul>
        @foreach ($genres as $genre)
            <li>
                <strong>{{ $genre->name }}</strong>: {{ $genre->description }}
            </li>
        @endforeach
    </ul>

@endsection