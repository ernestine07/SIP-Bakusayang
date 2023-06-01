<title>Menu</title>

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
                                <h2>Daftar Menu</h2>
                                <div class="card-body">
                                    <a href="{{route('menu.create')}}">
                                    <button type="button" class="btn btn-primary btn-sm">
                                    <i class="fa fa-plus"></i> Tambah Menu
                                    </button>
                                    </a>
                                </div>                                
                            </div>
                            <div class="row">
                                @foreach ($data as $key => $value)
                                <div class="col-sm-3" style="height: 300px">
                                    <div class="card-menu">
                                        {{-- style="height: 100%" --}}
                                        <center>
                                            <img src="{{asset('storage/'. $value->foto_produk)}}" width="100" height="50" alt="foto">
                                        <div class="card-body">
                                            <h4 class="card-title mb-1">{{$value->nama_menu}}</h4>
                                            <p class="card-text">{{$value->harga}}</p>
                                            @csrf
                                            <input type="hidden" name="menu_id" value={{$value->id}}>
                                            {{-- <a href="#" class="btn btn-primary" type="submit">Tambah</a> --}}
                                        </div>
                                        <div class="table-data-feature">
                                            <a href="{{route('menu.edit', $value->id)}}">
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="zmdi zmdi-edit"></i></a>
                                            </button>
                                            <form action="{{route('menu.destroy', $value->id)}}" method="POST" enctype="multipart/form-data">
                                                @method('DELETE')
                                                @csrf
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <i class="zmdi zmdi-delete"></i>
                                            </button>
                                            </form>
                                        </div>
                                        </center>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->        
        <!-- END PAGE CONTAINER-->
    </div>
</x-dashboard-layout>
