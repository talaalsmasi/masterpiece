<!-- resources/views/Admin/layouts/header.blade.php -->
{{-- <header class="header">
    <div class="user-menu">
        <span>Admin Name</span>
        <img src="{{ asset('Admin/user.jpg') }}" alt="User" class="user-image">
    </div>
</header> --}}

<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#">PetPal</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a style="color: white" class="nav-link" href="#">
                    {{ auth()->user()->name }}
                    <i class="fa-solid fa-right-from-bracket"
                       style="cursor: pointer;"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"></i>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                            </li>
        </ul>
    </div>
</nav>


