<!DOCTYPE html>
<html>
<head>
    <title>Contact List</title>
</head>
<body>
    <h1>All Contacts</h1>

    <a href="{{ route('contacts.create') }}">Add New Contact</a>

    <ul>
        @foreach($contacts as $contact)
            <li>
                <strong>Email:</strong> {{ $contact->email }}<br>
                <strong>Description:</strong> {{ $contact->description }}<br>
                <a href="{{ route('contacts.show', $contact->id) }}">View</a> |
                <a href="{{ route('contacts.edit', $contact->id) }}">Edit</a> |
                <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
            <hr>
        @endforeach
    </ul>

<form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
</form>



<!-- resources/views/contact/index.blade.php -->
@foreach ($contacts as $contact)
    <p>
        <strong>{{ $contact->email }}</strong><br>
        {{ $contact->description }}<br>

        <a href="{{ route('contacts.show', $contact->id) }}">View</a> |
        <a href="{{ route('contacts.edit', $contact->id) }}">Edit</a> |

        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </p>
@endforeach


</body>
</html>
