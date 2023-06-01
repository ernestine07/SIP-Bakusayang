<title>Data Pegawai</title>

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
                                @if (Auth::User()->role->nama_role=='Admin')
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary btn-sm">
                                    <i class="fa fa-plus"></i> <a href="{{route('pegawai.create')}}"> Tambah Pegawai</a>
                                    </button>
                                </div>
                                @endif
                            </div>
                            <!-- USER DATA-->
                            {{-- <div class="user-data m-b-30"> --}}
                                <div class="table-responsive table-data">
                                    <table class="table" id="data_user">
                                        <thead>
                                            <tr>
                                                <td>foto</td>
                                                <td>name</td>
                                                <td>no telp</td>
                                                <td>posisi</td>
                                                <td>ket</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pegawai as $key => $value)
                                            <tr>
                                                <td>
                                                    <img src="{{asset('storage/'.$value->foto)}}" width="60" height="30" alt="foto">
                                                </td>
                                                <td>
                                                    <div class="table-data__info">
                                                        <h5>{{$value->nama_pegawai}}</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-data__info">
                                                        <h6>{{$value->no_telp}}</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="role admin">{{$value->nama_role}}</span>
                                                </td>
                                                <td>
                                                    @if (Auth::User()->role->nama_role=='Admin')
                                                    <div class="table-data-feature">
                                                        <a href="{{route('pegawai.edit', $value->id)}}">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i></a>
                                                        </button>
                                                        <form action="{{route('pegawai.destroy', $value->id)}}" method="POST" enctype="multipart/form-data">
                                                            @method('DELETE')
                                                            @csrf
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        </form>
                                                    </div>
                                                    @endif
                                                </td>
                                            </tr>
                                            @endforeach
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
