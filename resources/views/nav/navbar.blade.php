<main>
    <nav class="navbar navbar-dark bg-secondary" aria-label="First navbar example">
        <div class="container-fluid btn-white ">
            <a class="navbar-brand text-white" href="#">Challenge PKL</a>
            <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon btn-white"></span>
            </button>

            <div class="collapse navbar-collapse btn-white" id="navbarsExample01">
                <ul class="navbar-nav me-auto mb-2">
                    <li class="nav-item">
                        <a class="nav-link {{ $active === 'home' ? 'active' : '' }}" href="/">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ $active === 'about' ? 'active' : '' }}" href=" /about">About</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown"
                            aria-expanded="false">Administrator</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown01">
                            <li>
                                <a href="/login" class="dropdown-item{{ $active === 'login' ? 'active' : '' }}"><i
                                        class="bi bi-people-fill"></i> Admin</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
