@extends('layout')

@section('title', 'Add College')
@section('content')

<h2>Add College</h2>

<form action="/colleges" method="post">
    @csrf

    <table>
        <tr>
            <td><label for="name">Name:</label></td>
            <td><input type="text" id="name" name="name" required></td>
        </tr>
        <tr>
            <td><label for="location">Location:</label></td>
            <td><input type="text" id="location" name="location" required></td>
        </tr>
        <tr>
            <td colspan="2"><button type="submit">Save College</butt</td>
        </tr>
    </table>
</form>
<script>
    $(document).ready(function() {
        $('form').validate({
            rules: {
                name: 'required',
                location:'required',                
            },
            messages: {
                name: 'Please enter your name',
                location: 'Please enter your location',
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    });
</script>
@endsection
