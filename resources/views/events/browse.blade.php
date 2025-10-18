<div id="section-bookmarked" class="p-8 rounded-2xl mb-8 bg-white shadow-2xl transition-all duration-300">
    <h2 class="text-3xl font-bold text-indigo-700 mb-6 border-b pb-3">Bookmarked Events</h2>

    @if($bookmarkedEvents->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($bookmarkedEvents as $event)
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl overflow-hidden border border-gray-100 transition duration-300">
                @if($event->image)
                    <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}" class="h-48 w-full object-cover">
                @endif
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $event->title }}</h3>
                    <p class="text-gray-600 mb-2">{{ $event->description }}</p>
                    <p class="text-sm text-gray-400 mb-4"><i class="fas fa-clock"></i> {{ \Carbon\Carbon::parse($event->event_time)->format('M d, Y h:i A') }}</p>

                    <form action="{{ route('events.bookmark', $event->id) }}" method="POST" class="mt-4">
                        @csrf
                        {{-- FIX: Simplify button logic since this view only shows bookmarked items --}}
                        <button type="submit" class="btn btn-sm w-full bg-red-600 border-red-600 text-white hover:bg-red-700 hover:border-red-700">
                            <i class="fas fa-trash"></i> Remove
                        </button>
                    </form>

                    <span class="text-sm text-gray-400 mt-2 block">By {{ $event->user->name }}</span>
                </div>
            </div>
            @endforeach
        </div>
    @else
        <p class="text-center text-gray-500 mt-6 text-lg">
            No Bookmarks Yet!<br>
            Click the <span class="font-semibold">Bookmark</span> button on events in the <span class="font-semibold">Browse Events</span> section to save them here.
        </p>
    @endif
</div>

<script src="https://kit.fontawesome.com/a2e0e9c6b4.js" crossorigin="anonymous"></script>
<div id="section-browse" class="p-8 rounded-2xl mb-8 bg-white shadow-2xl transition-all duration-300">
    <h2 class="text-3xl font-bold text-indigo-700 mb-8 border-b pb-3">Browse Events</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($events as $event)
        <div
            class="bg-white rounded-2xl shadow-lg hover:shadow-xl overflow-hidden border border-gray-100 transition duration-300">
            @if($event->image)
            <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}"
                class="h-48 w-full object-cover">
            @endif
            <div class="p-6">
                <h3 class="text-xl font-bold text-gray-800">{{ $event->title }}</h3>
                <p class="text-gray-600 mb-2">{{ $event->description }}</p>
                <p class="text-sm text-gray-400 mb-4"><i class="fas fa-clock"></i> {{
                    \Carbon\Carbon::parse($event->event_time)->format('M d, Y h:i A') }}</p>

                <form action="{{ route('events.bookmark', $event->id) }}" method="POST" class="mt-4">
                    @csrf
                    {{-- This uses the efficiently loaded $userBookmarks array from the controller --}}
                    <button type="submit" class="btn btn-sm w-full
                        @if(in_array($event->id, $userBookmarks))
                            bg-red-600 border-red-600 text-white hover:bg-red-700 hover:border-red-700
                        @else
                            btn-outline text-indigo-500 hover:bg-indigo-50
                        @endif
                    ">
                        @if(in_array($event->id, $userBookmarks))
                        <i class="fas fa-trash"></i> Remove
                        @else
                        <i class="far fa-bookmark"></i> Bookmark
                        @endif
                    </button>
                </form>

                <span class="text-sm text-gray-400 mt-2 block">By {{ $event->user->name }}</span>
            </div>
        </div>
        @endforeach
    </div>
</div>
