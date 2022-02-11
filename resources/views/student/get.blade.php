@extends('layouts.loggedin')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Get</h1>
    <h2>Name: {{$name}} </h2>
    <h3>ID : {{$id}} </h3>
    <ol>
        @for($i=0;$i<count($courses);$i++)
        <li>{{$courses[$i]}}</li>
        @endfor
    </ol>
    
</body>
</html>
@endsection
