@extends('layout')

@section('title', 'Employee List')
@section('content')
<h2>Employee List</h2>
<a href="{{ route('employees.create') }}" style="background:blue;">Add New Employee</a>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->email }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection