@extends('layouts.app')

@section('content')
{{--     placeholder value for songs --}}

<h2> Welcome to the app. </h2>

    <div class="container">
        <h1 class="title has-text-centered">Songs</h1>
        <div class="columns is-multiline">
            @foreach($songs as $song)
                <div class="column is-one-third">
                    <div class="card">
                        <!-- Card Image -->
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="{{ $song->image_url ? $song->image_url : 'https://via.placeholder.com/400x300?text=No+Image' }}" alt="Cover image for {{ $song->title }}">
                            </figure>
                        </div>

                        <!-- Card Content -->
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">{{ $song->title }}</p>
                                    <p class="subtitle is-6">{{ $song->artist }}</p>
                                </div>
                            </div>
                            <div class="content">
                                {{ $song->description }}
                                <br>
                                @if(isset($song->released_at))
                                    <time datetime="{{ $song->released_at }}">
                                        {{ \Carbon\Carbon::parse($song->released_at)->format('F j, Y') }}
                                    </time>
                                @endif
                                <br><br>
                                <!-- Audio Player -->
                                <audio controls>
                                    @if(!empty($song->audio_url))
                                        <source src="{{ $song->audio_url }}" type="audio/mpeg">
                                    @else
                                        <!-- Dummy Audio Source -->
                                        <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3" type="audio/mpeg">
                                    @endif
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
