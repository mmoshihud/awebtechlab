@extends('layouts.default')
@section('content')
    <div class="container">
        <form action="{{ route('student.update') }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $id }}">
            <input type="text" name="name" value="{{ $name }}"><br>
            @error('name')
                <span class="text-danger">{{ $message }}</span><br>
            @enderror
            <input type="text" name="username" value="{{ $username }}"><br>
            @error('username')
                <span class="text-danger">{{ $message }}</span><br>
            @enderror
            <input type="text" name="email" value="{{ $email }}"><br>
            @error('email')
                <span class="text-danger">{{ $message }}</span><br>
            @enderror
            <input type="submit" value="Update">
        </form>
    </div>
@endsection
