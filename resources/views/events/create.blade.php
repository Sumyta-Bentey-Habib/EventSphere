<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Event</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-base-200 flex items-center justify-center min-h-screen">

    <div class="card w-full max-w-lg shadow-lg bg-base-100">
        <div class="card-body">
            <h2 class="text-2xl font-bold mb-4">Create New Event</h2>

            @if(session('success'))
                <div class="alert alert-success mb-4">{{ session('success') }}</div>
            @endif

            <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-control mb-3">
                    <label class="label">Title</label>
                    <input type="text" name="title" class="input input-bordered" placeholder="Event Title" required>
                </div>

                <div class="form-control mb-3">
                    <label class="label">Description</label>
                    <textarea name="description" class="textarea textarea-bordered" placeholder="Event Description" required></textarea>
                </div>

                <div class="form-control mb-3">
                    <label class="label">Event Time</label>
                    <input type="datetime-local" name="event_time" class="input input-bordered" required>
                </div>

                <div class="form-control mb-4">
                    <label class="label">Image</label>
                    <input type="file" name="image" class="file-input file-input-bordered" accept="image/*">
                </div>

                <button type="submit" class="btn btn-primary w-full">Create Event</button>
            </form>
        </div>
    </div>

</body>
</html>
