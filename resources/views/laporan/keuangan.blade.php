<title>Data Keuangan</title>

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
        <!-- MAIN CONTENT-->
        <div class="main-content">
            @if ($message = Session::get('success'))
            <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                <span class="badge badge-pill badge-success">Success</span>
                {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-header">
                                <h2>Data Pegawai</h2>                                
                            </div>
                            <!-- USER DATA-->
                            {{-- <div class="user-data m-b-30"> --}}
                                <div class="table-responsive table-data">
                                    <table class="table" id="data_user">
                                        <thead>
                                            <tr>
                                                <td>No</td>
                                                <td>Tanggal</td>
                                                <td>Jasa</td>
                                                <td>Jumlah</td>
                                                <td>Keterangan</td>
                                                <td>Total</td>
                                                <td>Foto Bukti</td>
                                            </tr>
                                        </thead>
                                        <tbody>                                            
                                            <tr>
                                                <td align='center'></td>
                                                <td>tanggal</td>
                                                <td>nama jasa</td>
                                                <td>jumlah</td>
                                                <td>ket</td>
                                                <td>Rp.00000</td>
                                                <td align='center'>
                                                    <a class="image-popup-no-margins" href="#">
                                                        <img src="#" width="60" height="60" class="img-circle" alt="" />
                                                    </a>
                                                </td>
                                                <td align='center'>
                                                    {{-- @if(Auth::user()->can(['pemasukan-edit'])) --}}
                                                    <button onclick type="button" class="btn btn-sm btn-default">
                                                        <span class="glyphicon glyphicon-eye-open"></span>
                                                    </button>
                                                    {{-- @endif --}}
                                                    @if(Auth::user()->can(['pemasukan-delete']))
                                                    <button type="button" class="btn btn-sm btn-default" onclick="">
                                                        <span class="glyphicon glyphicon-trash"></span>
                                                    </button>
                                                    @endif
                                                </td>
                                            </tr>
                                            {{-- @endforeach --}}
                                        </tbody>
                                    </table>
                                </div>
                            {{-- </div> --}}
                            <!-- END USER DATA-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
    </div>
</x-dashboard-layout>
