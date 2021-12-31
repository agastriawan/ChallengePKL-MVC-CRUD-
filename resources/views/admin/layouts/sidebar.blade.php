<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-secondary sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin') ? 'active' : '' }} " aria-current="page" href="/admin"
                    style="color: white">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/siswa*') ? 'active' : '' }}" href="/admin/siswa"
                    style="color: white">
                    <span data-feather="list"></span>
                    Siswa
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/guru*') ? 'active' : '' }}" href="/admin/guru"
                    style="color: white">
                    <span data-feather="list"></span>
                    Guru
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/karyawan*') ? 'active' : '' }}" href="/admin/karyawan"
                    style="color: white">
                    <span data-feather="list"></span>
                    Karyawan
                </a>
            </li>

        </ul>



    </div>
</nav>
