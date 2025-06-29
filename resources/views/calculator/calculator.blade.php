<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('calculator')}}" method="post">
        @csrf
        <label for="first_number">First-Number</label>
        <input type="text" name="first_number" id="first_number"> <br> <br>

        <label for="second_number">Second_Number</label>
        <input type="text" name="second_number" id="second_number"><br> <br>

        <button type="submit">Submit</button>

    </form>

    <h1>The Result is: {{session()->pull('sum')}}</h1>
</body>


</html>
