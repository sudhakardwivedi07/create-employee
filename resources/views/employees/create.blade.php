@extends('layout')

@section('title', 'Add Employee')
@section('content')

<h2>Add Employee</h2>

<form action="/employees" method="post">
    @csrf

    <table>
        <tr>
            <td><label for="name">Name:</label></td>
            <td><input type="text" id="name" name="name" required></td>
        </tr>
        <tr>
            <td><label for="email">Email:</label></td>
            <td><input type="email" id="email" name="email" required></td>
        </tr>
        <tr>
            <td><label for="password">Password:</label></td>
            <td><input type="password" id="password" name="password" required></td>
        </tr>
        <tr>
            <td colspan="2"><button type="submit">Save Employee</butt</td>
        </tr>
    </table>
    
</form>
<script>
    $(document).ready(function() {
        $('form').validate({
            rules: {
                name: 'required',
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 8 // Minimum length of 8 characters
                }
            },
            messages: {
                name: 'Please enter your name',
                email: {
                    required: 'Please enter your email address',
                    email: 'Please enter a valid email address'
                },
                password: {
                    required: 'Please enter your password',
                    minlength: 'Password must be at least 8 characters long'
                }
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    });
</script>
@endsection

