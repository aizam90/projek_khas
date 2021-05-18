<!-- [ navigation menu ] start -->
<nav class="pc-sidebar light-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header bg-primary">
            <a href="index.html" class="b-brand">
                <!-- ========   change your logo here   ============ -->
                <img src="assets/images/logo.svg" alt="" class="logo logo-lg">
                <img src="assets/images/logo-sm.svg" alt="" class="logo logo-sm">
            </a>
        </div>
        <div class="navbar-content">
            <ul class="pc-navbar">

                <li class="pc-item">
                    <a href="{{ url('dashboard') }}" class="pc-link "><span class="pc-micon"><i class="fas fa-chart-pie text-secondary"></i></span><span class="pc-mtext">DASHBOARD</span></a>
                </li>

                {{-- Menu Maklumat Projek --}}
                <li class="pc-item pc-hasmenu">
                    <a href="#" class="pc-link"><span class="pc-micon"><i class="fab fa-product-hunt text-secondary"></i></span><span class="pc-mtext">MAKLUMAT PROJEK</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link" href="{{ url('maklumat-permohonan') }}">Maklumat Permohonan</a></li>
                        <li class="pc-item"><a class="pc-link" href="{{ url('maklumat-permohonan') }}">Maklumat Kelulusan</a></li>
                        <li class="pc-item"><a class="pc-link" href="{{ url('maklumat-permohonan') }}">Maklumat Pelaksanaan & Pemantauan</a></li>
                    </ul>
                </li>

                {{-- Menu Maklumat Projek --}}
                <li class="pc-item pc-hasmenu">
                    <a href="#" class="pc-link"><span class="pc-micon"><i class="fas fa-tools text-secondary"></i></span><span class="pc-mtext">SELENGGARA</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link" href="{{ url('maklumat-permohonan') }}">Peruntukan Tahunan Semasa</a></li>
                        <li class="pc-item"><a class="pc-link" href="{{ url('maklumat-permohonan') }}">Katergori Projek</a></li>
                        <li class="pc-item"><a class="pc-link" href="{{ url('maklumat-permohonan') }}">Kaedah Perolehan</a></li>
                        <li class="pc-item"><a class="pc-link" href="{{ url('maklumat-permohonan') }}">Agensi Pelaksana</a></li>
                        <li class="pc-item"><a class="pc-link" href="{{ url('maklumat-permohonan') }}">Negeri</a></li>
                        <li class="pc-item"><a class="pc-link" href="{{ url('maklumat-permohonan') }}">Daerah</a></li>
                        <li class="pc-item"><a class="pc-link" href="{{ url('maklumat-permohonan') }}">Parlimen</a></li>
                        <li class="pc-item"><a class="pc-link" href="{{ url('maklumat-permohonan') }}">Dun</a></li>
                    </ul>
                </li>


                {{-- Menu Maklumat Projek --}}
                <li class="pc-item pc-hasmenu">
                    <a href="#" class="pc-link"><span class="pc-micon"><i class="fas fa-users-cog text-secondary"></i></span><span class="pc-mtext">PENGGUNA</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link" href="{{ url('maklumat-permohonan') }}">Senarai Pengguna</a></li>
                    </ul>
                </li>


            </ul>
        </div>
    </div>
</nav>
<!-- [ navigation menu ] end -->
