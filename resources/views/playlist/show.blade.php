@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="display-4">{{ $playlist->name }}</h1>
            <p class="lead">{{ $playlist->description }}</p>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <div class="list-group">
                @forelse($playlist->songs as $song)
                <div class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="mb-1">{{ $song->title }}</h5>
                        <p class="mb-1">Artist: {{ $song->artist }}</p>
                        <small>Duration: {{ $song->duration }}</small>
                    </div>
                    <div>
                        <a href="#" class="btn btn-primary btn-sm">Play</a>
                        <a href="#" class="btn btn-warning btn-sm">Edit</a>
                        <form action="#" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </div>
                </div>
                @empty
                <div class="list-group-item">
                    <p class="text-center mb-0">No songs available in this playlist.</p>
                </div>
                @endforelse
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12 text-center">
            <a href="#" class="btn btn-success">Add New Song</a>
        </div>
    </div>
</div>
@endsection
