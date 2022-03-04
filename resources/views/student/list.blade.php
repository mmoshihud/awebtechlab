@extends('layouts.default')
@section('content')
    <style>
        .btn-primary:hover {
            background-color: #cb46d3;
            border-color: #cb46d3;
        }

        .btn-primary {
            background-color: #cb46d3;
            border-color: #cb46d3;
        }

    </style>

    <div class="container">
        <h1>Student List</h1>
        <h2>

        </h2>
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <th>ID</th>
                <th>Email</th>
                <th>Username</th>
                <th>Reg Date</th>
                <th></th>

            </tr>
            @foreach ($students as $s)
                <tr>
                    <td><a
                            href="{{ route('student.details', ['id' => $s->id, 'name' => $s->name]) }}">{{ $s->name }}</a>
                    </td>
                    <td>{{ $s->id }}</td>
                    <td>{{ $s->email }}</td>
                    <td>{{ $s->username }}</td>
                    <td>{{ $s->created_at }}</td>
                    <td><a href="{{ route('student.edit', ['id' => $s->id]) }}" class="btn btn-primary ">Edit</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
