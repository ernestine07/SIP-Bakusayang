
<!-- MENU SIDEBAR-->
    {{-- Customer --}}
    @if (Auth::user()->role_id==2)
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="#">
                            <img src="{{asset('template/images/icon/logo_full.png')}}"  width="200" height="176" alt="Logo cafe"/>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="{{route('Customer.index')}}">
                                <i class="fas fa-home"></i>Dashboard</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Menu</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a class="nav-link active" href="{{url('/menu-customer1')}}">All</a>
                                </li>
                                @foreach ($kategori as $data)
                                <li>
                                    <a class="nav-link" href="{{route('kategori1',$data->nama_kategori)}}">{{$data->nama_kategori}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <a href="{{url('/cartcustomer')}}">
                                <i class="fa fa-shopping-cart"></i>Keranjang</a>
                        </li>
                        <li>
                            <a href="{{route('transaksi')}}">
                                <i class="fas fa-credit-card"></i>Pesanan</a>
                        </li>
                        {{-- <li>
                            <a href="{{route('kritik')}}">
                                <i class="fa fa-comments"></i>Kritik dan Saran</a>
                        </li> --}}
                    </ul>
                </div>
            </nav>
        </header>
        <!-- MENU SIDEBAR CUSTOMER-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                    <img src="{{asset('template/images/icon/logo_full.png')}}" width="200" height="100" alt="Logo cafe" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a class="js-arrow" href="{{route('Customer.index')}}">
                            <i class="fas fa-home"></i>Dashboard</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Menu</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a class="nav-link active" href="{{url('/menu-customer1')}}">All</a>
                                </li>
                                @foreach ($kategori as $data)
                                <li>
                                    <a class="nav-link" href="{{route('kategori1',$data->nama_kategori)}}">{{$data->nama_kategori}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <a href="{{url('/cartcustomer')}}">
                                <i class="fa fa-shopping-cart"></i>Keranjang</a>
                        </li>
                        <li>
                            <a href="{{route('transaksi')}}">
                                <i class="fas fa-credit-card"></i>Pesanan</a>
                        </li>
                        {{-- <li>
                            <a href="{{route('kritik')}}">
                                <i class="fa fa-comments"></i>Kritik dan Saran</a>
                        </li> --}}
                    </ul>
                </nav>
            </div>
        </aside>
    {{-- Dapur --}}
    {{-- @elseif (Auth::user()->role_id==3)
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="#">
                            <img src="{{asset('template/images/icon/logo_full.png')}}"  width="200" height="176" alt="Logo cafe"/>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="{{route('Dashboard.index')}}">
                                <i class="fas fa-home"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="{{route('pesanan')}}">
                                <i class="fas fa-credit-card"></i>Pesanan</a>
                        </li>
                        <li>
                            <a href="{{route('kritik')}}">
                                <i class="fa fa-comments"></i>Kritik dan Saran</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{asset('template/images/icon/logo_full.png')}}" width="200" height="100" alt="Logo cafe" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a class="js-arrow" href="{{route('Dashboard.index')}}">
                            <i class="fas fa-home"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="{{route('pesanan')}}">
                                <i class="fas fa-credit-card"></i>Pesanan</a>
                        </li>
                        <li>
                            <a href="{{route('kritik')}}">
                                <i class="fa fa-comments"></i>Kritik dan Saran</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside> --}}
    {{-- Kasir --}}
    @elseif ((Auth::user()->role_id==3))
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="#">
                            <img src="{{asset('template/images/icon/logo_full.png')}}"  width="200" height="176" alt="Logo cafe"/>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="{{route('Dashboard.index')}}">
                                <i class="fas fa-home"></i>Dashboard</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Menu</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a class="nav-link active" href="{{url('/menu-customer2')}}">All</a>
                                </li>
                                @foreach ($kategori as $data)
                                <li>
                                    <a class="nav-link" href="{{route('kategori2', $data->nama_kategori) }}">{{$data->nama_kategori}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('cartkasir')}}">
                                <i class="fas fa-credit-card"></i>Keranjang</a>
                        </li>
                        <li>
                            <a href="{{route('transaksi.index')}}">
                                <i class="fas fa-credit-card"></i>Pesanan</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Laporan</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a class="nav-link " href="{{route('proses_keuangan1')}}">Keuangan</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{route('penjualan1') }}">Penjualan</a>
                                </li>
                            </ul>
                        </li>
                        {{-- <li>
                            <a href="{{route('kritik')}}">
                                <i class="fa fa-comments"></i>Kritik dan Saran</a>
                        </li> --}}
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{asset('template/images/icon/logo_full.png')}}" width="200" height="100" alt="Logo cafe" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a class="js-arrow" href="{{route('Dashboard.index')}}">
                            <i class="fas fa-home"></i>Dashboard</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Menu</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a class="nav-link " href="{{url('/menu-customer2')}}">All</a>
                                </li>
                                @foreach ($kategori as $data)
                                <li>
                                    <a class="nav-link" href="{{route('kategori2', $data->nama_kategori) }}">{{$data->nama_kategori}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('cartkasir')}}">
                                <i class="fas fa-credit-card"></i>Keranjang</a>
                        </li>
                        <li>
                            <a href="{{route('transaksi.index')}}">
                                <i class="fas fa-credit-card"></i>Pesanan</a>
                        </li>
                        <li>
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Laporan</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a class="nav-link " href="{{url('proses1')}}">Keuangan</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{url('penjualan1') }}">Penjualan</a>
                                    </li>
                                </ul>
                        </li>
                        {{-- <li>
                            <a href="{{route('kritik')}}">
                                <i class="fa fa-comments"></i>Kritik dan Saran</a>
                        </li> --}}
                    </ul>
                </nav>
            </div>
        </aside>
    {{-- Aset --}}
    @elseif ((Auth::user()->role_id==4))
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="#">
                            <img src="{{asset('template/images/icon/logo_full.png')}}"  width="200" height="176" alt="Logo cafe"/>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="{{route('Dashboard.index')}}">
                                <i class="fas fa-home"></i>Dashboard</a>
                        </li>
                        <li>
                            <a class="js-arrow" href="{{route('Aset.index')}}">
                            <i class="fas fa-home"></i>Barang</a>
                        </li>
                        {{-- <li>
                            <a href="{{route('kritik')}}">
                                <i class="fa fa-comments"></i>Kritik dan Saran</a>
                        </li> --}}
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="{{route('Dashboard.index')}}">
                    <img src="{{asset('template/images/icon/logo_full.png')}}" width="200" height="100" alt="Logo cafe" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a class="js-arrow" href="{{route('Dashboard.index')}}">
                            <i class="fas fa-home"></i>Dashboard</a>
                        </li>
                        <li>
                            <a class="js-arrow" href="{{route('Aset.index')}}">
                            <i class="fas fa-home"></i>Barang</a>
                        </li>
                        {{-- <li>
                            <a href="{{route('kritik')}}">
                                <i class="fa fa-comments"></i>Kritik dan Saran</a>
                        </li> --}}
                    </ul>
                </nav>
            </div>
        </aside>
    {{-- Admin --}}
    @elseif ((Auth::user()->role_id==1))
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="#">
                            <img src="{{asset('template/images/icon/logo_full.png')}}"  width="200" height="176" alt="Logo cafe"/>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="{{route('Dashboard.index')}}">
                                <i class="fas fa-home"></i>Dashboard</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Menu</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a class="nav-link active" href="{{route('menu.index')}}">All</a>
                                </li>
                                @foreach ($kategori as $data)
                                <li>
                                    <a class="nav-link" href="{{route('menu.kategori', $data->nama_kategori) }}">{{$data->nama_kategori}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <a href="{{url('Kategori')}}">
                                <i class="fas fa-table"></i>Kategori</a>
                        </li>
                        <li>
                            <a href="{{url('pegawai')}}">
                                <i class="fas fa-table"></i>Data Pegawai</a>
                        </li>
                        <li>
                            <a class="js-arrow" href="{{route('Aset.index')}}">
                                <i class="far fa-check-square"></i>Barang</a>
                        </li>
                        <li>
                            <a href="{{url('Datauser')}}">
                                <i class="fas fa-list-alt"></i>Data User</a>
                        </li>
                        <li>
                            <a href="{{route('laporan.index')}}">
                                <i class="fas fa-bullhorn"></i>Laporan</a>
                        </li>
                        {{-- <li>
                            <a href="{{route('kritik')}}">
                            <i class="fa fa-comments"></i>Kritik dan Saran</a>
                        </li>                         --}}
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="menu-sidebar d-none d-lg-block">
            <a class="logo" href="#">
                <img src="{{asset('template/images/icon/logo_full.png')}}"  width="200" height="176" alt="Logo cafe"/>
            </a>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a class="js-arrow" href="{{route('Dashboard.index')}}">
                            <i class="fas fa-home"></i>Dashboard</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Menu</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a class="nav-link active" href="{{route('menu.index')}}">All</a>
                                </li>
                                @foreach ($kategori as $data)
                                <li>
                                    <a class="nav-link" href="{{route('menu.kategori', $data->nama_kategori) }}">{{$data->nama_kategori}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <a href="{{url('Kategori')}}">
                                <i class="fas fa-table"></i>Kategori</a>
                        </li>
                        <li>
                            <a href="{{url('pegawai')}}">
                                <i class="fas fa-table"></i>Data Pegawai</a>
                        </li>
                        <li>
                            <a class="js-arrow" href="{{route('Aset.index')}}">
                                <i class="far fa-check-square"></i>Barang</a>
                        </li>
                        <li>
                            <a href="{{url('Datauser')}}">
                                <i class="fas fa-list-alt"></i>Data User</a>
                        </li>
                        <li>
                            <a href="{{route('laporan.index')}}">
                                <i class="fas fa-bullhorn"></i>Laporan</a>
                        </li>
                        {{-- <li>
                            <a href="{{route('kritik')}}">
                                <i class="fa fa-comments"></i>Kritik dan Saran</a>
                        </li> --}}
                    </ul>
                </nav>
            </div>
        </aside>        
    {{-- pemilik --}}
    @else
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="#">
                            <img src="{{asset('template/images/icon/logo_full.png')}}"  width="200" height="176" alt="Logo cafe"/>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a class="js-arrow" href="{{route('Dashboard.index')}}">
                            <i class="fas fa-home"></i>Dashboard</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Menu</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                    <li>
                                    <a class="nav-link active" href="{{route('Customer.menu3')}}">All</a>
                                </li>
                                @foreach ($kategori as $data)
                                <li>
                                    <a class="nav-link" href="{{route('kategori3', $data->nama_kategori) }}">{{$data->nama_kategori}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>                        
                        <li>
                            <a href="{{route('Datapegawai')}}">
                                <i class="fas fa-table"></i>Data Pegawai</a>
                        </li>
                        <li>
                            <a class="js-arrow" href="{{route('Databarang')}}">
                                <i class="far fa-check-square"></i>Barang</a>
                        </li>
                        <li>
                            <a href="{{route('Datauser')}}">
                                <i class="fas fa-list-alt"></i>Data User</a>
                        </li>
                        <li>
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Laporan</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                    <li>
                                        <a class="nav-link " href="{{route('proses_keuangan')}}">Keuangan</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{route('penjualan') }}">Penjualan</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{route('stok_barang2') }}">Stok Barang</a>
                                        {{-- <a class="nav-link" href="#">Stok Barang</a> --}}
                                    </li>
                                </ul>
                        </li>
                        {{-- <li>
                            <a href="{{route('kritik')}}">
                                <i class="fa fa-comments"></i>Kritik dan Saran</a>
                        </li> --}}
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{asset('template/images/icon/logo_full.png')}}" width="500" height="100" alt="Logo cafe" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a class="js-arrow" href="{{url('/Dashboardpemilik')}}">
                            <i class="fas fa-home"></i>Dashboard</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Menu</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a class="nav-link active" href="{{route('Customer.menu3')}}">All</a>
                                </li>
                                @foreach ($kategori as $data)
                                <li>
                                    <a class="nav-link" href="{{route('kategori3', $data->nama_kategori) }}">{{$data->nama_kategori}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>                        
                        <li>
                            <a href="{{route('Datapegawai')}}">
                                <i class="fas fa-table"></i>Data Pegawai</a>
                        </li>
                        <li>
                            <a class="js-arrow" href="{{route('Databarang')}}">
                                <i class="far fa-check-square"></i>Barang</a>
                        </li>
                        <li>
                            <a href="{{route('Datauser')}}">
                                <i class="fas fa-list-alt"></i>Data User</a>
                        </li>
                        <li>
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Laporan</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a class="nav-link " href="{{route('proses_keuangan')}}">Keuangan</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{route('penjualan') }}">Penjualan</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{route('stok_barang2') }}">Stok Barang</a>
                                    </li>
                                </ul>
                        </li>
                        {{-- <li>
                            <a href="{{route('kritik')}}">
                                <i class="fa fa-comments"></i>Kritik dan Saran</a>
                        </li> --}}
                    </ul>
                </nav>
            </div>
        </aside>
    @endif
<!-- END MENU SIDEBAR-->

<!-- PAGE CONTAINER-->
<!-- END HEADER MOBILE-->
<!-- HEADER MOBILE-->

<!-- PAGE CONTAINER-->
