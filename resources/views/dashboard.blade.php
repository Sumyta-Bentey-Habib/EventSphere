@extends('layouts.app')

@section('content')
<div class="w-full max-w-7xl mx-auto py-6">

    {{-- Top Greeting and User Info --}}
    <div class="flex justify-between items-center mb-10 pb-4 border-b border-gray-200" data-aos="fade-down">
        <h1 class="text-4xl font-extrabold text-gray-800">Welcome Back, <span class="text-indigo-600">{{ Auth::user()->name }}</span> 👋</h1>

        {{-- Logout button for larger screens --}}
        <div class="hidden lg:flex items-center gap-3">
            <a href="{{ route('home') }}" class="btn btn-outline btn-sm transition text-gray-700 hover:bg-indigo-50 border-gray-300">Return Home</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-sm btn-error text-black hover:bg-red-700 transition">
                    <i class="fas fa-sign-out-alt mr-1"></i> Logout
                </button>
            </form>
        </div>
    </div>


    {{-- Dynamic Content Sections --}}
    <div id="sections" data-aos="fade-up" data-aos-delay="200">

        {{-- 1. Create Section (Default view) --}}
        <div id="section-create" class="p-8 rounded-xl mb-8 bg-white shadow-2xl transition-all duration-300">
            <h2 class="text-3xl font-bold text-indigo-700 mb-6 border-b pb-3">Create New Event</h2>
            <form method="POST" action="{{ route('events.store') }}" enctype="multipart/form-data" class="flex flex-col gap-6">
                @csrf
                <label class="form-control w-full">
                    <div class="label"><span class="label-text font-medium text-gray-700">Event Title</span></div>
                    <input type="text" name="title" placeholder="e.g., Annual Tech Summit" class="input input-bordered w-full" required>
                </label>
                <label class="form-control w-full">
                    <div class="label"><span class="label-text font-medium text-gray-700">Event Location</span></div>
                    <input type="text" name="location" placeholder="e.g., District" class="input input-bordered w-full" required>
                </label>

                <label class="form-control w-full">
                    <div class="label"><span class="label-text font-medium text-gray-700">Description</span></div>
                    <textarea name="description" placeholder="A brief description of what your event is about." class="textarea textarea-bordered w-full" rows="4"></textarea>
                </label>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <label class="form-control w-full">
                        <div class="label"><span class="label-text font-medium text-gray-700">Date and Time</span></div>
                        <input type="datetime-local" name="event_time" class="input input-bordered w-full" required>
                    </label>
                    <label class="form-control w-full">
                        <div class="label"><span class="label-text font-medium text-gray-700">Event Image</span></div>
                        <input type="file" name="image" class="file-input file-input-bordered file-input-primary w-full">
                    </label>
                </div>

                <button type="submit" class="btn btn-primary bg-indigo-600 hover:bg-indigo-700 border-indigo-600 text-white w-48 self-end mt-4">
                    <i class="fas fa-plus-circle mr-2"></i> Create Event
                </button>
            </form>
        </div>

        {{-- 2. Browse Section --}}
        <div id="section-browse" class="hidden p-8 rounded-xl mb-8 bg-white shadow-2xl transition-all duration-300">
            <h2 class="text-3xl font-bold text-indigo-700 mb-8 border-b pb-3">Browse Trending Events</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- DYNAMIC EVENT LOOP START --}}
                @foreach (\App\Models\Event::latest()->take(6)->get() as $event)
                    <div class="card bg-base-100 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden border border-gray-100">
                        @if($event->image)
                            <figure>
                                <img src="{{ asset('storage/' . $event->image) }}" class="h-48 w-full object-cover" alt="{{ $event->title }}">
                            </figure>
                        @endif
                        <div class="card-body p-5 flex flex-col gap-2">
                            <h3 class="text-xl font-bold text-gray-800">{{ $event->title }}</h3>
                            <p class="text-gray-600 text-sm line-clamp-2">{{ $event->description }}</p>
                            <div class="badge badge-outline text-xs text-indigo-500">{{ \Carbon\Carbon::parse($event->event_time)->format('M d, Y h:i A') }}</div>

                            <form method="POST" action="{{ route('events.bookmark', $event->id) }}" class="mt-4">
                                @csrf
                                <button type="submit" class="btn btn-outline btn-sm btn-block text-indigo-500 hover:bg-indigo-50">
                                    <i class="fas fa-bookmark"></i> Bookmark
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
                {{-- DYNAMIC EVENT LOOP END --}}
            </div>
        </div>

        {{-- 3. Bookmarked Section --}}
        <div id="section-bookmarked" class="hidden p-8 rounded-xl mb-8 bg-white shadow-2xl transition-all duration-300">
            <h2 class="text-3xl font-bold text-indigo-700 mb-6 border-b pb-3">Your Bookmarked Events</h2>

            {{-- Placeholder/Empty State --}}
            @if(($bookmarkedEvents ?? 0) == 0)
                <div class="alert alert-info shadow-lg bg-blue-50 text-blue-800 border-l-4 border-blue-400">
                    <i class="fas fa-info-circle text-2xl"></i>
                    <div>
                        <h3 class="font-bold">No Bookmarks Yet!</h3>
                        <div class="text-sm">Click the 'Bookmark' button on events in the **Browse Events** section to save them here.</div>
                    </div>
                </div>
            @else
                {{-- Your logic to loop through and display bookmarked events here --}}
                <p>Displaying **{{ $bookmarkedEvents }}** bookmarked events...</p>
            @endif
        </div>
    </div>
</div>

{{-- The showSection script is now defined in the layouts/app.blade.php file for global access --}}
@endsection
