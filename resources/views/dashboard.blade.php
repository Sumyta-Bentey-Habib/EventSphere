@extends('layouts.app')

@section('content')
<div class="w-full max-w-7xl mx-auto py-6">

    {{-- Top Buttons --}}
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-4xl font-extrabold text-gray-800">Welcome Back, {{ Auth::user()->name }} 👋</h1>
        <div class="flex gap-3">
            <a href="{{ route('home') }}" class="btn btn-outline btn-sm hover:bg-gray-100 transition">Return Home</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn  btn-sm text-black hover:bg-red-600 transition">Logout</button>
            </form>
        </div>
    </div>

    {{-- Dashboard Cards --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
        <div class="card bg-white shadow-lg hover:shadow-2xl rounded-xl transition cursor-pointer" onclick="showSection('create')">
            <div class="card-body flex flex-col gap-3">
                <div class="flex items-center gap-3">
                    <i class="fas fa-calendar-plus text-4xl text-primary"></i>
                    <h2 class="card-title text-lg font-semibold">Create Event</h2>
                </div>
                <p class="text-gray-600">Host your own event and invite others to join.</p>
                <button class="btn btn-primary mt-auto">Go</button>
            </div>
        </div>

        <div class="card bg-white shadow-lg hover:shadow-2xl rounded-xl transition cursor-pointer" onclick="showSection('browse')">
            <div class="card-body flex flex-col gap-3">
                <div class="flex items-center gap-3">
                    <i class="fas fa-search text-4xl text-secondary"></i>
                    <h2 class="card-title text-lg font-semibold">Browse Events</h2>
                </div>
                <p class="text-gray-600">Discover trending events and join your favorites.</p>
                <button class="btn btn-secondary mt-auto">Explore</button>
            </div>
        </div>

        <div class="card bg-white shadow-lg hover:shadow-2xl rounded-xl transition cursor-pointer" onclick="showSection('bookmarked')">
            <div class="card-body flex flex-col gap-3">
                <div class="flex items-center gap-3">
                    <i class="fas fa-bookmark text-4xl text-accent"></i>
                    <h2 class="card-title text-lg font-semibold">Bookmarked</h2>
                </div>
                <p class="text-gray-600">See all events you’ve saved for later.</p>
                <button class="btn btn-accent mt-auto">View</button>
            </div>
        </div>
    </div>

    {{-- Sections --}}
    <div id="sections">
        {{-- Create Section --}}
        <div id="section-create" class="hidden p-6 rounded-xl mb-8 bg-white shadow-lg">
            <h2 class="text-2xl font-semibold mb-4">Create New Event</h2>
            <form method="POST" action="{{ route('events.store') }}" enctype="multipart/form-data" class="flex flex-col gap-4">
                @csrf
                <input type="text" name="title" placeholder="Event Title" class="input input-bordered w-full" required>
                <textarea name="description" placeholder="Description" class="textarea textarea-bordered w-full" rows="4"></textarea>
                <input type="datetime-local" name="event_time" class="input input-bordered w-full" required>
                <input type="file" name="image" class="file-input file-input-bordered w-full">
                <button type="submit" class="btn btn-primary w-32 self-end">Create Event</button>
            </form>
        </div>

        {{-- Browse Section --}}
        <div id="section-browse" class="hidden p-6 rounded-xl mb-8 bg-white shadow-lg">
            <h2 class="text-2xl font-semibold mb-6">Browse Events</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach (\App\Models\Event::latest()->get() as $event)
                    <div class="card bg-gray-50 rounded-xl shadow hover:shadow-xl transition overflow-hidden">
                        @if($event->image)
                            <img src="{{ asset('storage/' . $event->image) }}" class="h-48 w-full object-cover">
                        @endif
                        <div class="card-body flex flex-col gap-2">
                            <h3 class="text-lg font-semibold">{{ $event->title }}</h3>
                            <p class="text-gray-600 text-sm">{{ $event->description }}</p>
                            <p class="text-gray-400 text-xs mt-2">{{ \Carbon\Carbon::parse($event->event_time)->format('M d, Y h:i A') }}</p>
                            <form method="POST" action="{{ route('events.bookmark', $event->id) }}" class="mt-auto">
                                @csrf
                                <button type="submit" class="btn btn-outline btn-sm w-full mt-2">
                                    <i class="fas fa-bookmark mr-2"></i> Bookmark
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Bookmarked Section --}}
        <div id="section-bookmarked" class="hidden p-6 rounded-xl mb-8 bg-white shadow-lg">
            <h2 class="text-2xl font-semibold mb-4">Bookmarked Events</h2>
            <p class="text-gray-500">You have no bookmarked events yet.</p>
        </div>
    </div>
</div>

<script>
    function showSection(section) {
        document.querySelectorAll('#sections > div').forEach(el => el.classList.add('hidden'));
        document.getElementById(`section-${section}`).classList.remove('hidden');
    }
</script>
@endsection
