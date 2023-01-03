
<!-- MENU SIDEBAR-->
    {{-- Customer --}}
    @if (Auth::user()->role_id==2)
        <!-- MENU SIDEBAR CUSTOMER-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a class="nav-link" href="{{url('Customer-index')}}">
                    <img src="{{asset('template/images/icon/logo_full.png')}}" width="200" height="100" alt="Logo cafe" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="{{url('Customer-index')}}">
                            <i class="fas fa-home"></i>Dashboard</a>
                        </li>
                        <li>
                            <a class="js-arrow" href="#">
                                <i class="fas fa-list-ul"></i>Menu</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a class="nav-link " href="{{route('Customer.menu')}}">All</a>
                                </li>
                                @foreach ($kategori as $data)
                                <li>
                                    <a class="nav-link" href="{{route('menu.kategori', $data->nama_kategori) }}">{{$data->nama_kategori}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('Cart.index')}}">
                                <i class="fa fa-shopping-cart"></i>Keranjang</a>
                        </li>
                        <li>
                            <a href="{{url('transaksi')}}">
                            <i class="fas fa-credit-card"></i>Transaksi</a>
                        </li>
                        <li>
                            <a href="{{route('Pesan.index')}}">
                                <i class="fa fa-comments"></i>Kritik dan Saran</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fa fa-info-circle"></i>Tentang</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
    {{-- Dapur --}}
    @elseif (Auth::user()->role_id==3)
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
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Barang</a>
                        </li>
                        <li>
                            <a href="{{url('transaksi')}}">
                                <i class="fas fa-credit-card"></i>Transaksi</a>
                        </li>
                        <li>
                            <a href="{{route('Pesan.index')}}">
                                <i class="fa fa-comments"></i>Kritik dan Saran</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fa fa-info-circle"></i>Tentang</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
    {{-- Kasir --}}
    @elseif ((Auth::user()->role_id==4))
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
                                    <a class="nav-link " href="{{route('Customer.menu')}}">All</a>
                                </li>
                                @foreach ($kategori as $data)
                                <li>
                                    <a class="nav-link" href="{{route('menu.kategori', $data->nama_kategori) }}">{{$data->nama_kategori}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('transaksi.order')}}">
                                <i class="fas fa-credit-card"></i>Order</a>
                        </li>
                        <li>
                            <a href="{{url('transaksi')}}">
                                <i class="fas fa-credit-card"></i>Transaksi</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-bullhorn"></i>Laporan</a>
                        </li>
                        <li>
                            <a href="{{route('Pesan.index')}}">
                                <i class="fa fa-comments"></i>Kritik dan Saran</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fa fa-info-circle"></i>Tentang</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
    {{-- Aset --}}
    @elseif ((Auth::user()->role_id==5))
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
                        <li>
                            <a href="{{route('Pesan.index')}}">
                                <i class="fa fa-comments"></i>Kritik dan Saran</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fa fa-info-circle"></i>Tentang</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
    {{-- admin dan pemilik --}}
    @else
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
                                    <a class="nav-link active" href="{{url('menu')}}">All</a>
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
                            <a href="{{url('Cart')}}">
                                <i class="fa fa-shopping-cart"></i>Keranjang</a>
                        </li>
                        <li>
                            <a href="{{route('midtrans.index')}}">
                                <i class="fas fa-credit-card"></i>Transaksi</a>
                        </li>
                        <li>
                            <a href="{{url('Datauser')}}">
                                <i class="fas fa-list-alt"></i>Data User</a>
                        </li>
                        <li>
                            <a href="{{route('laporan.index')}}">
                                <i class="fas fa-bullhorn"></i>Laporan</a>
                        </li>
                        <li>
                            <a href="{{route('Pesan.index')}}">
                                <i class="fa fa-comments"></i>Kritik dan Saran</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fa fa-info-circle"></i>Tentang</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
    @endif
<!-- END MENU SIDEBAR-->

<!-- PAGE CONTAINER-->
<div class="page-container">
    <!-- HEADER DESKTOP-->
    <header class="header-desktop">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="header-wrap">
                    <form class="form-header" action="" method="POST">
                        <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                        <button class="au-btn--submit" type="submit">
                            <i class="zmdi zmdi-search"></i>
                        </button>
                    </form>
                    <div class="header-button">
                        <div class="noti-wrap">
                            <div class="noti__item js-item-menu">
                                <i class="zmdi zmdi-comment-more"></i>
                                <span class="quantity">1</span>
                                <div class="mess-dropdown js-dropdown">
                                    <div class="mess__title">
                                        <p>You have 2 news message</p>
                                    </div>
                                    <div class="mess__item">
                                        <div class="image img-cir img-40">
                                            <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                        </div>
                                        <div class="content">
                                            <h6>Michelle Moreno</h6>
                                            <p>Have sent a photo</p>
                                            <span class="time">3 min ago</span>
                                        </div>
                                    </div>
                                    <div class="mess__item">
                                        <div class="image img-cir img-40">
                                            <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                        </div>
                                        <div class="content">
                                            <h6>Diane Myers</h6>
                                            <p>You are now connected on message</p>
                                            <span class="time">Yesterday</span>
                                        </div>
                                    </div>
                                    <div class="mess__footer">
                                        <a href="#">View all messages</a>
                                    </div>
                                </div>
                            </div>
                            <div class="noti__item js-item-menu">
                                <i class="zmdi zmdi-email"></i>
                                <span class="quantity">1</span>
                                <div class="email-dropdown js-dropdown">
                                    <div class="email__title">
                                        <p>You have 3 New Emails</p>
                                    </div>
                                    <div class="email__item">
                                        <div class="image img-cir img-40">
                                            <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                        </div>
                                        <div class="content">
                                            <p>Meeting about new dashboard...</p>
                                            <span>Cynthia Harvey, 3 min ago</span>
                                        </div>
                                    </div>
                                    <div class="email__item">
                                        <div class="image img-cir img-40">
                                            <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                        </div>
                                        <div class="content">
                                            <p>Meeting about new dashboard...</p>
                                            <span>Cynthia Harvey, Yesterday</span>
                                        </div>
                                    </div>
                                    <div class="email__item">
                                        <div class="image img-cir img-40">
                                            <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                        </div>
                                        <div class="content">
                                            <p>Meeting about new dashboard...</p>
                                            <span>Cynthia Harvey, April 12,,2018</span>
                                        </div>
                                    </div>
                                    <div class="email__footer">
                                        <a href="#">See all emails</a>
                                    </div>
                                </div>
                            </div>
                            <div class="noti__item js-item-menu">
                                <i class="zmdi zmdi-notifications"></i>
                                <span class="quantity">3</span>
                                <div class="notifi-dropdown js-dropdown">
                                    <div class="notifi__title">
                                        <p>You have 3 Notifications</p>
                                    </div>
                                    <div class="notifi__item">
                                        <div class="bg-c1 img-cir img-40">
                                            <i class="zmdi zmdi-email-open"></i>
                                        </div>
                                        <div class="content">
                                            <p>You got a email notification</p>
                                            <span class="date">April 12, 2018 06:50</span>
                                        </div>
                                    </div>
                                    <div class="notifi__item">
                                        <div class="bg-c2 img-cir img-40">
                                            <i class="zmdi zmdi-account-box"></i>
                                        </div>
                                        <div class="content">
                                            <p>Your account has been blocked</p>
                                            <span class="date">April 12, 2018 06:50</span>
                                        </div>
                                    </div>
                                    <div class="notifi__item">
                                        <div class="bg-c3 img-cir img-40">
                                            <i class="zmdi zmdi-file-text"></i>
                                        </div>
                                        <div class="content">
                                            <p>You got a new file</p>
                                            <span class="date">April 12, 2018 06:50</span>
                                        </div>
                                    </div>
                                    <div class="notifi__footer">
                                        <a href="#">All notifications</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="account-wrap">
                            <div class="account-item clearfix js-item-menu">
                                <div class="content">
                                    <a class="js-acc-btn" href="#">{{Auth::user()->name}}</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        {{-- <div class="image">
                                            <a href="#">
                                                <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                            </a>
                                        </div> --}}
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#">{{Auth::user()->name}}</a>
                                            </h5>
                                            <span class="email">{{Auth::user()->email}}</span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-settings"></i>Setting</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-money-box"></i>Billing</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <form action="/logout-post" method="POST">
                                                    @csrf
                                                    {{-- <button type="submit">
                                                    <i class="zmdi zmdi-money-box"></i>Logout
                                                    </button> --}}
                                                    <button type="submit" onclick="return confirm('Apakah Anda yakin ingin keluar?')">
                                                    <i class="zmdi zmdi-money-box"></i>
                                                        Logout
                                                    </button>
                                                </form>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER DESKTOP-->

    {{-- <!--logout modal -->
    <div class="modal fade" id="LogoutModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticModalLabel">LOGOUT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        This is a static modal, backdrop click will not close it.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Confirm</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end logout  modal --> --}}
