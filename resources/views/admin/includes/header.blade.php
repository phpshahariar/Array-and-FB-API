<nav class="navbar navbar-expand-md navbar-dark bg-danger">
    <div class="container">
        <a href="" class="navbar-brand">LOGO</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav">
            <li class="nav-item"><a href="{{ route('add-blog') }}" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="{{ route('attendance') }}" class="nav-link">Attendance</a></li>
            <li class="nav-item dropdown">
                <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                <ul class="dropdown-menu bg-dark">
                    <li class="nav-item bg-danger"><a href="" class="nav-link dropdown-item bg-danger">Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>