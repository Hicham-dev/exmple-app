<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 5px;
    }
</style>
<body>
    <h1>Students list</h1>
    <p>
        <a href="{{ route('students.create') }}"> Add a new student</a>
    </p>
    <table>
        <tr>
            <th>

            </th>
            <th>

            </th>
            <th>
                Full name
            </th>
            <th>
                Birthdate
            </th>
        </tr>
        <tr>
            @foreach($students as $student)
                <tr>
                    <td>
                        <form action="{{ route('students.delete', ['student' => $student]) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                    <td>
                        <a href="{{ route('students.edit', ['student' => $student]) }}">Edit</a>
                    </td>
                    <td>
                        {{ $student->full_name }}
                    </td>
                    <td>
                        {{ $student->birthdate }}
                    </td>
                </tr>
            @endforeach
        </tr>
    </table>
</body>
</html>
