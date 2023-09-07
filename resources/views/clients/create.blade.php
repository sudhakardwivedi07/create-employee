@extends('layout')

@section('title', 'Add Client')
@section('content')

    <form action="{{ route('clients.store') }}" method="post">
        @csrf
        <table>
        <tr>
            <th>Field</th>
            <th>Information</th>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" id="name" required></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><textarea name="address" id="address" required></textarea></td>
        </tr>
        <tr>
            <td>City</td>
            <td><input type="text" name="city" id="city" required></td>
        </tr>
        <tr>
            <td>State</td>
            <td><input type="text" name="state" id="state" required></td>
        </tr>
        <tr>
            <td>Country</td>
            <td><input type="text" name="country" id="country" required></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" id="email" required></td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td><input type="text" name="phone_number" id="phone_number" required></td>
        </tr>
        <tr>
            <td colspan="2"><button type="submit">Save Client</button></td>
        </tr>
        </table>
    </form>
    <script>
        $(document).ready(function() {
            $('form').validate({
                rules: {
                    name: 'required',
                    address: 'required',
                    city:'required',
                    state:'required',
                    country:'required',
                    email: {
                        required: true,
                        email: true
                    },
                    phone_number: 'required'
                },
                messages: {
                    name: 'Please enter your name',
                    address:'Please enter your name',
                    city:'Please enter your city',
                    state:'Please enter your state',
                    country:'Please enter your country',
                    email: {
                        required: 'Please enter your email address',
                        email: 'Please enter a valid email address'
                    },
                    phone_number: 'Please enter your phone number',
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        });
    </script>
    @endsection
