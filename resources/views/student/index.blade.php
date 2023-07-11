<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>website</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="">
        <thead>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>address</th>
        </thead>
    @foreach ($students as $item)
        <tbody>
            <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->address }}</td>
            </tr>
        </tbody>
    @endforeach
    </table>
</body>
</html>