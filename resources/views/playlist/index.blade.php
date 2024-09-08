@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
            <a href="{{ route('playlist.create') }}" style="color:#427d74; font-size:130%; line-height: 1.5;">Add New Playlist</a>
            </div>
    </div>

        <main class="col-md-9">

            <div class="row mt-4">
                @forelse($playlists as $playlist)
                <div class="col-md-3 mb-4">
                    <div class="card bg-white shadow-sm rounded-lg border border-primary">
                        <div class="card-body">
                            <h2 class="card-title text-primary">{{ $playlist->name }}</h2>
                            <p class="card-text text-dark">{{ $playlist->description }}</p>

                            <h4 class="mt-4 text-dark">Songs:</h4>
                            <div class="list-group">
                                @forelse($playlist->songs as $song)
                                <div class="list-group-item d-flex justify-content-between align-items-center border-bottom">
                                    <div>
                                        <h5 class="mb-1 text-dark">{{ $song->title }}</h5>
                                        <p class="mb-1 text-dark">Artist: {{ $song->artist }}</p>
                                        <small class="text-muted">Duration: {{ $song->duration }}</small>
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-outline-primary btn-sm">Play</a>
                                        <a href="#" class="btn btn-outline-secondary btn-sm">Edit</a>
                                        <form action="#" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                                        </form>
                                    </div>
                                </div>
                                @empty
                                <div class="list-group-item text-center">
                                    <p class="mb-0 text-muted">No songs available in this playlist.</p>
                                </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-md-12">
                    <p class="text-center text-muted">No playlists found.</p>
                </div>
                @endforelse
            </div>
        </main>
    </div>
</div>
@endsection
