<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{ route('students.update', ['student' => $student ]) }}" method="POST">
    @csrf
    @method('patch')
    <label>
        Full name
        @error('full_name')
        {{ $message }}
        @enderror
        <input type="text" name="full_name" value="{{ $student->full_name }}"/>
    </label>

    <label>
        Birthdate
        @error('birthdate')
        {{ $message }}
        @enderror
        <input type="date" name="birthdate" value="{{ $student->birthdate }}"/>
    </label>

    <button type="submit">update</button>
</form>
</body>
</html>
