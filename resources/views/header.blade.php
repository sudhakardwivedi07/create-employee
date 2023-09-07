<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<header>
    <img class="logo" src="https://eazytranslator.com/hrms/script/public/user-uploads/app-logo/4bd85dc52091156564323f0f1e0c9e30.png" alt="logo " width="100" height="50" >
    <nav>
        <ul class="nav__links">
            <li>
                <a href="{{ route('employees.index') }}">Employee</a>
                <a href="{{ route('colleges.index') }}">College</a>
                <a href="{{ route('clients.index') }}">Client</a>
            </li>
        </ul>
    </nav>
</header>
<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include jQuery Validation Plugin -->
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
