<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
</head>
<body>
    <h1>Students</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Email</th>
            <th>Group id</th>
        </tr>

        @foreach($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->surname}}</td>
                <td>{{$student->email}}</td>
                <td><a href="{{route('groups.show',$student->studentGroup )}}">{{$student->studentGroup->title}}</a></td> //nuoroda i grupes show puslapi kur yra visa detali informacija apie grupe

                


                {{-- $student->studentGroup = $group --}}
                {{-- objektas - grupes modelio savybes --}}
                {{-- aprasyti iki jo kelia --}}


                
            </tr>
        @endforeach
    </table>
</body>
</html>