<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #7952b3">
    <div class="container-fluid">
        <a class="navbar-brand" href="/student/list">Student Portal</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <style>
                    .nav-link {
                        font-weight: bold;

                    }

                </style>
                <li class="nav-item">
                    <a class="nav-link" href="/student/list">List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('student.create') }}">Create</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/student/get">Get</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
