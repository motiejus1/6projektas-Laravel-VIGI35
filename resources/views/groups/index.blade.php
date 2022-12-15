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

    {{-- 1. Atvaizduoti stulpeli, kiek studentu turi grupe x --}}
    {{-- 2. Atsidarius grupe per show, matyti visa grupei priklausanciu studentu sarasa --}}
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Students</th>
            <th>Actions</th>
        </tr>
        @foreach ($groups as $group)
            <tr>
                <td>{{$group->id}}</td>
                <td>{{$group->title}}</td>
                <td>{{$group->groupStudents->count()}}</td>
                <td><a href="{{route('groups.show', $group)}}"> Show</a></td>
            </tr>
        @endforeach    

    </table>
</body>
</html>