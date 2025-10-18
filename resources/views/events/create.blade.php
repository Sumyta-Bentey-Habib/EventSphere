@extends('layouts.app')

@section('content')
<div class="w-full max-w-7xl mx-auto py-6" id="sections">

    {{-- Create Event --}}
    <div id="section-create" class="p-8 rounded-2xl mb-8 bg-white shadow-2xl transition-all duration-300">
        <h2 class="text-3xl font-bold text-indigo-700 mb-6 border-b pb-3">Create New Event</h2>

        {{-- Success message --}}
        @if(session('success'))
            <div class="alert alert-success mb-4">
                {{ session('success') }}
            </div>
        @endif

        {{-- Validation errors --}}
        @if($errors->any())
            <div class="alert alert-error mb-4">
                <ul class="list-disc list-inside text-red-600">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('events.store') }}" enctype="multipart/form-data" class="flex flex-col gap-6">
            @csrf

            {{-- Title --}}
            <label class="form-control w-full">
                <div class="label">
                    <span class="label-text font-medium text-gray-700">Event Title</span>
                </div>
                <input
                    type="text"
                    name="title"
                    placeholder="e.g., Annual Tech Summit"
                    class="input input-bordered w-full"
                    required
                >
            </label>

            {{-- Description --}}
            <label class="form-control w-full">
                <div class="label">
                    <span class="label-text font-medium text-gray-700">Description</span>
                </div>
                <textarea
                    name="description"
                    placeholder="Event description here..."
                    class="textarea textarea-bordered w-full"
                    rows="4"
                    required
                ></textarea>
            </label>

            {{-- Date/Time + Image --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text font-medium text-gray-700">Date and Time</span>
                    </div>
                    <input
                        type="datetime-local"
                        name="event_time"
                        class="input input-bordered w-full"
                        required
                    >
                </label>

                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text font-medium text-gray-700">Event Image</span>
                    </div>
                    <input
                        type="file"
                        name="image"
                        class="file-input file-input-bordered file-input-primary w-full"
                        accept="image/*"
                    >
                </label>
            </div>

            {{-- Submit --}}
            <button
                type="submit"
                class="btn btn-primary bg-indigo-600 hover:bg-indigo-700 border-indigo-600 text-white w-48 self-end mt-4"
            >
                <i class="fas fa-plus-circle mr-2"></i> Create Event
            </button>
        </form>
    </div>
</div>
@endsection
