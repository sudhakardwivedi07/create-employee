@extends('layout')

@section('title', 'Client Update')
@section('content')
    <form action="{{ route('clients.update', $client->id) }}" method="post">
        @csrf
        @method('PUT')
        <!-- Include fields similar to the create view but pre-filled with $client data -->
        
        <label>Name: </label><label><input type="text" name="name" value="{{ $client['name'] }}" required></label>
        <label>Address: <textarea name="address"  required>{{ $client['address'] }}</textarea></label>
        <label>City: <input type="text" name="city" value="{{ $client['city'] }}" required></label>
        <label>State: <input type="text" name="state" value="{{ $client['state'] }}" required></label>
        <label>Country: <input type="text" name="country" value="{{ $client['country'] }}" required></label>
        <label>Email: <input type="email" name="email" value="{{ $client['email'] }}" required></label>
        <label>Phone Number: <input type="text" name="phone_number" value="{{ $client['phone_number'] }}" required></label>
        <button type="submit">Update Client</button>
    </form>
    @endsection