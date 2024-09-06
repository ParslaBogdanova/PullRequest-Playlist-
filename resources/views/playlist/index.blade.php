@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="display-4 text-teal-600">All Playlists</h1>
            <p class="lead text-gray-700">Here is a list of all playlists and their songs.</p>
        </div>
    </div>

    <div class="row mt-4">
        @forelse($playlists as $playlist)
        <div class="col-md-12 mb-4">
            <div class="card bg-white shadow-sm rounded-lg border border-teal-200">
                <div class="card-body">
                    <h2 class="card-title text-teal-600">{{ $playlist->name }}</h2>
                    <p class="card-text text-gray-600">{{ $playlist->description }}</p>

                    <h4 class="mt-4 text-gray-700">Songs:</h4>
                    <div class="list-group">
                        @forelse($playlist->songs as $song)
                        <div class="list-group-item d-flex justify-content-between align-items-center border-b border-gray-200">
                            <div>
                                <h5 class="mb-1 text-gray-800">{{ $song->title }}</h5>
                                <p class="mb-1 text-gray-600">Artist: {{ $song->artist }}</p>
                                <small class="text-gray-500">Duration: {{ $song->duration }}</small>
                            </div>
                            <div>
                                <a href="#" class="btn btn-outline-teal btn-sm">Play</a>
                                <a href="#" class="btn btn-outline-yellow btn-sm">Edit</a>
                                <form action="#" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-red btn-sm">Delete</button>
                                </form>
                            </div>
                        </div>
                        @empty
                        <div class="list-group-item text-center">
                            <p class="mb-0 text-gray-600">No songs available in this playlist.</p>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-md-12">
            <p class="text-center text-gray-600">No playlists found.</p>
        </div>
        @endforelse
    </div>

    <div class="row mt-4">
        <div class="col-md-12 text-center">
            <a href="#" class="btn btn-teal text-white">Add New Playlist</a>
        </div>
    </div>
</div>
@endsection
