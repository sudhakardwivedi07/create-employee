@extends('layout')

@section('title', 'College List')
@section('content')

<h2>College List</h2>
<a href="{{ route('colleges.create') }}" style="background:blue;">Add New College</a>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Location</th>
        </tr>
    </thead>
    <tbody>
        @foreach($colleges as $college)
            <tr>
                <td>{{ $college->id }}</td>
                <td>{{ $college->name }}</td>
                <td>{{ $college->location }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
