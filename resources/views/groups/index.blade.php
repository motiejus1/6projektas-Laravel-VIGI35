<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Groups</title>
</head>
<body>
    <h1>Groups</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
        </tr>
        @foreach ($groups as $group)
            <tr>
                <td>{{$group->id}}</td>
                <td>{{$group->title}}</td>
            </tr>
        @endforeach    

    </table>
</body>
</html>