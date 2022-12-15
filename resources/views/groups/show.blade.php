
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Group Info</title>
</head>
<body>
    <h2>Group Info</h2>

    <h3>Group title {{$group->title}}</h3>


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
                <td><a href="{{route('groups.show',$student->studentGroup )}}">{{$student->studentGroup->title}}</a></td> 

                


                {{-- $student->studentGroup = $group --}}
                {{-- objektas - grupes modelio savybes --}}
                {{-- aprasyti iki jo kelia --}}


                
            </tr>
        @endforeach
    </table>
</body>
</html>