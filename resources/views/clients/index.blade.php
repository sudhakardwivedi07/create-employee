@extends('layout')

@section('title', 'Client List')
@section('content')
<h2>Client List</h2>
    <a href="{{ route('clients.create') }}" style="background:blue;">Add New Client</a>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
                <tr>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->phone_number }}</td>
                    <td>
                        <a href="{{ route('clients.edit', $client->id) }}">Edit</a>
                        <form action="{{ route('clients.destroy', $client->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endsection
