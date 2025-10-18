@extends('layouts.app')

@section('content')
<div class="w-full max-w-7xl mx-auto py-6">

    {{-- Top Greeting and User Info --}}
    <div class="flex justify-between items-center mb-10 pb-4 border-b border-[#ffffff10]" data-aos="fade-down">
        <h1 class="text-4xl font-extrabold text-white">Welcome Back, <span class="bg-gradient-to-r from-purple-400 to-indigo-400 text-transparent bg-clip-text">{{ Auth::user()->name }}</span> 👋</h1>

        {{-- Logout button for larger screens --}}
        <div class="hidden lg:flex items-center gap-3">
            <a href="{{ route('home') }}" class="btn btn-sm transition bg-white/10 hover:bg-white/20 text-white border-white/20 hover:border-white/30">Return Home</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-sm btn-error bg-red-600 border-red-600 text-white hover:bg-red-700 transition">
                    <i class="fas fa-sign-out-alt mr-1"></i> Logout
                </button>
            </form>
        </div>
    </div>


    {{-- Dynamic Content Sections --}}
    <div id="sections" data-aos="fade-up" data-aos-delay="200">

        {{-- 1. Create Section (Default view) --}}
        <div id="section-create" class="p-8 rounded-xl mb-8 bg-[#2A3142] shadow-2xl transition-all duration-300 border border-[#ffffff10]">
            <h2 class="text-3xl font-bold bg-gradient-to-r from-purple-400 to-indigo-400 text-transparent bg-clip-text mb-6 border-b border-[#ffffff10] pb-3">Create New Event</h2>
            <form method="POST" action="{{ route('events.store') }}" enctype="multipart/form-data" class="flex flex-col gap-6">
                @csrf
                <label class="form-control w-full">
                    <div class="label"><span class="label-text font-medium text-gray-300">Event Title</span></div>
                    <input type="text" name="title" placeholder="e.g., Annual Tech Summit" class="input input-bordered w-full bg-[#170E28] border-[#ffffff20] text-white placeholder-gray-500" required>
                </label>

                <label class="form-control w-full">
                    <div class="label"><span class="label-text font-medium text-gray-300">Description</span></div>
                    <textarea name="description" placeholder="A brief description of what your event is about." class="textarea textarea-bordered w-full bg-[#170E28] border-[#ffffff20] text-white placeholder-gray-500" rows="4"></textarea>
                </label>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <label class="form-control w-full">
                        <div class="label"><span class="label-text font-medium text-gray-300">Date and Time</span></div>
                        <input type="datetime-local" name="event_time" class="input input-bordered w-full bg-[#170E28] border-[#ffffff20] text-white" required>
                    </label>
                    <label class="form-control w-full">
                        <div class="label"><span class="label-text font-medium text-gray-300">Event Image</span></div>
                        <input type="file" name="image" class="file-input file-input-bordered file-input-primary w-full text-white file-input-sm bg-[#170E28] border-[#ffffff20] text-sm">
                    </label>
                </div>

                <button type="submit" class="btn btn-primary bg-gradient-to-r from-[#6C3EF8] to-[#A35CF8] border-none text-white w-48 self-end mt-4 hover:opacity-90 transition">
                    <i class="fas fa-plus-circle mr-2"></i> Create Event
                </button>
            </form>
        </div>

        {{-- 2. Browse Section --}}
        <div id="section-browse" class="hidden p-8 rounded-xl mb-8 bg-[#2A3142] shadow-2xl transition-all duration-300 border border-[#ffffff10]">
            <h2 class="text-3xl font-bold bg-gradient-to-r from-purple-400 to-indigo-400 text-transparent bg-clip-text mb-8 border-b border-[#ffffff10] pb-3">Browse Trending Events</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                {{-- FIX: Use the $events variable passed from the controller instead of fetching again --}}
                @foreach ($events as $event)
                    <div class="card bg-[#170E28] rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden border border-[#ffffff10]">
                        @if($event->image)
                            <figure>
                                <img src="{{ asset('storage/' . $event->image) }}" class="h-48 w-full object-cover" alt="{{ $event->title }}">
                            </figure>
                        @endif
                        <div class="card-body p-5 flex flex-col gap-2 text-white">
                            <h3 class="text-xl font-bold text-white">{{ $event->title }}</h3>
                            <p class="text-gray-400 text-sm line-clamp-2">{{ $event->description }}</p>
                            <div class="badge badge-outline text-xs text-indigo-300 border-indigo-300/50">{{ \Carbon\Carbon::parse($event->event_time)->format('M d, Y h:i A') }}</div>

                            <form action="{{ route('events.bookmark', $event->id) }}" method="POST" class="mt-4">
                                @csrf
                                {{-- FIX: Use the $userBookmarks array passed from the controller to show 'Bookmark' or 'Remove' --}}
                                <button type="submit" class="btn btn-sm btn-block
                                    @if(in_array($event->id, $userBookmarks))
                                        bg-red-600 border-red-600 text-white hover:bg-red-700 hover:border-red-700
                                    @else
                                        btn-outline text-indigo-300 border-indigo-300 hover:bg-indigo-900/50
                                    @endif
                                ">
                                    @if(in_array($event->id, $userBookmarks))
                                        <i class="fas fa-trash"></i> Remove
                                    @else
                                        <i class="far fa-bookmark"></i> Bookmark
                                    @endif
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- 3. Bookmarked Section (Updated with dark theme) --}}
        <div id="section-bookmarked" class="hidden p-8 rounded-xl mb-8 bg-[#2A3142] shadow-2xl transition-all duration-300 border border-[#ffffff10]">
            <h2 class="text-3xl font-bold bg-gradient-to-r from-purple-400 to-indigo-400 text-transparent bg-clip-text mb-6 border-b border-[#ffffff10] pb-3">Your Bookmarked Events</h2>

            @if(isset($bookmarkedEvents) && $bookmarkedEvents->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($bookmarkedEvents as $event)
                    <div class="bg-white/5 backdrop-blur-md rounded-2xl border border-purple-500/50 shadow-lg hover:shadow-xl overflow-hidden transition duration-300">
                        @if($event->image)
                            <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}" class="h-48 w-full object-cover">
                        @endif
                        <div class="p-6">
                            <h3 class="text-2xl font-bold text-white mb-2">{{ $event->title }}</h3>
                            <p class="text-gray-300 mb-2">{{ $event->description }}</p>
                            <p class="text-sm text-gray-400 mb-4"><i class="fas fa-clock"></i> {{ \Carbon\Carbon::parse($event->event_time)->format('M d, Y h:i A') }}</p>

                            <div class="flex items-center justify-between mt-4">
                                <form action="{{ route('events.bookmark', $event->id) }}" method="POST">
                                    @csrf
                                    {{-- Since this view only shows bookmarked items, the button is always 'Remove' --}}
                                    <button type="submit" class="btn btn-sm bg-red-600 border-red-600 hover:bg-red-700 hover:border-red-700 text-white">
                                        <i class="fas fa-trash"></i> Remove
                                    </button>
                                </form>
                                <span class="text-sm text-gray-400">By {{ $event->user->name }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            @else
                {{-- Empty State --}}
                <div class="alert alert-info shadow-lg bg-[#170E28] text-indigo-300 border-l-4 border-indigo-400">
                    <i class="fas fa-info-circle text-2xl"></i>
                    <div>
                        <h3 class="font-bold text-white">No Bookmarks Yet!</h3>
                        <div class="text-sm text-gray-400">Click the 'Bookmark' button on events in the **Browse Events** section to save them here.</div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

<script src="https://kit.fontawesome.com/a2e0e9c6b4.js" crossorigin="anonymous"></script>
@endsection
