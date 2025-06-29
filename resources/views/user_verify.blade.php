<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<div class="container mt-5">
    <form action="{{ route('user.store') }}" method="POST">
    @csrf
        <div class="mb-3">
            <label for="emailInput" class="form-label">Email address</label>
            <input type="email" class="form-control" id="emailInput" name="email" placeholder="name@example.com" required>
        </div>
        <div class="mb-3">
            <label for="descTextarea" class="form-label">Description</label>
            <textarea class="form-control" id="descTextarea" name="description" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
