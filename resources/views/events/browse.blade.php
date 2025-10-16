@extends('layouts.app')

@section('content')
<div class="w-full max-w-6xl mx-auto">
    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold mb-2">Browse Events</h1>
        <p class="text-gray-500">Explore all events created by users.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($events as $event)
        <div class="card bg-base-100 shadow-md hover:shadow-lg transition">
            @if($event->image)
                <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}" class="rounded-t-lg h-48 w-full object-cover">
            @endif
            <div class="card-body">
                <h3 class="text-xl font-semibold">{{ $event->title }}</h3>
                <p class="text-gray-500">{{ $event->description }}</p>
                <p class="text-sm text-gray-400 mt-2"><i class="fas fa-clock"></i> {{ \Carbon\Carbon::parse($event->event_time)->format('M d, Y h:i A') }}</p>

                <div class="card-actions justify-between mt-3">
                    <form action="{{ route('events.bookmark', $event->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-accent">
                            @if(Auth::user()->bookmarks->contains($event->id))
                                <i class="fas fa-bookmark"></i> Bookmarked
                            @else
                                <i class="far fa-bookmark"></i> Bookmark
                            @endif
                        </button>
                    </form>
                    <span class="text-sm text-gray-400">By {{ $event->user->name }}</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<script src="https://kit.fontawesome.com/a2e0e9c6b4.js" crossorigin="anonymous"></script>
@endsection
