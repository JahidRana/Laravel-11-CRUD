<!DOCTYPE html>
<html>
<head>
    <title>Create Todo</title>
    <!-- Link to CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Optional: Link to Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center text-primary">Create Todo</h1>
        <form action="{{ route('todos.store') }}" method="POST" class="bg-light p-4 rounded shadow-sm">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title:</label>
                <input type="text" id="title" name="title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea id="description" name="description" class="form-control" rows="5"></textarea>
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{ route('todos.index') }}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </form>
    </div>

    <!-- Optional: Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
