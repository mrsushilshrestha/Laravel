<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- resources/views/contact/create.blade.php -->
<form action="{{ route('contacts.store') }}" method="POST">
    @csrf
    <label>Email:</label>
    <input type="email" name="email" required><br>

    <label>Description:</label>
    <textarea name="description" required></textarea><br>

    <button type="submit">Create Contact</button>
</form>
</body>
</html>