<title>Laporan</title>

<x-dashboard-layout>
    <div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="header-wrap">
                        <div class="header-button">
                            <div class="account-wrap">
                                <div class="account-item clearfix js-item-menu">
                                    <div class="content">
                                        <a class="js-acc-btn" href="#">{{Auth::user()->name}}</a>
                                    </div>
                                    <div class="account-dropdown js-dropdown">
                                        <div class="info clearfix">
                                            <div class="content">
                                                <h5 class="name">
                                                    <a href="#">{{Auth::user()->name}}</a>
                                                    <a href="#">{{Auth::user()->role->nama_role}}</a>
                                                </h5>
                                                <span class="email">{{Auth::user()->email}}</span>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__body">
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <form action="/" method="POST">
                                                        @csrf                                                    
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
        <!-- Main content -->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="card-header">
                    <h2>Daftar Laporan</h2>
                    </div>
                    <div class="row">
                    <div class="col col-lg-4 col-md-4">
                        <div class="card-menu">
                            <div class="card-header">
                                <strong><h4>KEUANGAN</h4></strong>
                            </div>
                            <div class="card-body">
                                <a href="{{ route('laporan.proses_keuangan')}}">
                                <button type="button" class="btn btn-primary btn-sm">Buka</button>
                                </a>
                            </div>
                        </div>
                        <div class="card-menu">
                            <div class="card-header">
                                <strong><h4>PENJUALAN</h4></strong>
                            </div>
                            <div class="card-body">
                                <a href="{{ route('laporan.penjualan')}}">
                                <button type="button" class="btn btn-primary btn-sm">Buka</button> 
                                </a>
                            </div>
                        </div>
                        <div class="card-menu">
                            <div class="card-header">
                                <strong><h4>STOK BARANG</h4></strong>
                            </div>
                            <div class="card-body">
                                <a href="{{ route('laporan.stok_barang')}}">
                                <button type="button" class="btn btn-primary btn-sm">Buka</button> 
                                </a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>

