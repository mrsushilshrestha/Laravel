<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- resources/views/contact/edit.blade.php -->
<form action="{{ route('contacts.update', $contact->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Email:</label>
    <input type="email" name="email" value="{{ $contact->email }}" required><br>

    <label>Description:</label>
    <textarea name="description" required>{{ $contact->description }}</textarea><br>

    <button type="submit">Update Contact</button>
</form>
</body>
</html>