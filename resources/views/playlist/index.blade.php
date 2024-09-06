@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="display-4">All Playlists</h1>
            <p class="lead">Choose a playlist to view its songs.</p>
        </div>
    </div>

    <div class="row mt-4">
        @forelse($playlists as $playlist)
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $playlist->name }}</h5>
                    <p class="card-text">{{ $playlist->description }}</p>
                    <a href="{{ route('playlists.show', $playlist->id) }}" class="btn btn-primary">View Playlist</a>
                </div>
            </div>
        </div>
        @empty
        <div class="col-md-12">
            <p class="text-center">No playlists found.</p>
        </div>
        @endforelse
    </div>
</div>
@endsection
