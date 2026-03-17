<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superheroes Data</title>
</head>
<body>
    <h1>Superheroes Data</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Superhero Name</th>
            <th>Real Name</th>
            <th>Superhero Photo</th>
            <th>Additional Info</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
        @foreach($superheroes as $superhero)
        <tr>
            <td>{{ $superhero->id }}</td>
            <td>{{ $superhero->superhero_name }}</td>
            <td>{{ $superhero->real_name }}</td>
            <td><img src="{{ $superhero->superhero_photo }}" alt="{{ $superhero->superhero_name }}" width="100"></td>
            <td>{{ $superhero->additional_info }}</td>
            <td>{{ $superhero->created_at }}</td>
            <td>{{ $superhero->updated_at }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>