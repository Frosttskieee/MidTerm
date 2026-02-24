<!DOCTYPE html>
<html>
<head>
    <title>Laravel Features</title>
    <style>
        table { width: 50%; border-collapse: collapse; margin: 20px 0; }
        th, td { border: 1px solid #999; padding: 0.5rem; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>
    <h1>Laravel Features List</h1>
    <table>
    <thead>
        <tr>
            <th>ID</th> 
            <th>Name</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($features as $feature)
            <tr>
                <td>{{ $feature->id }}</td> 
                <td>{{ $feature->name }}</td>
                <td>{{ $feature->Description }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
