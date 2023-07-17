<title>Tambah Data User</title>

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
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-header">
                                <h2>Tambah Data User</h2>
                            </div>
                            <div class="card">
                                <div class="card-body card-block">
                                    <form method="post" action="{{route('Datauser.store')}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Nama<sup class="text-danger">*</sup></label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="text-input" name="name" placeholder="Text" class="form-control">
                                                <div class="text-danger">
                                                    @error('name')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">User Name<sup class="text-danger">*</sup></label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="text-input" name="username" placeholder="Text" class="form-control">
                                                <div class="text-danger">
                                                    @error('username')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Email<sup class="text-danger">*</sup></label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="email" id="text-input" name="email" placeholder="Text" class="form-control">
                                                <div class="text-danger">
                                                    @error('email')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Password<sup class="text-danger">*</sup></label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="text-input" name="password" placeholder="Text" class="form-control">
                                                <div class="text-danger">
                                                    @error('password')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="select" class=" form-control-label">Posisi<sup class="text-danger">*</sup></label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <select id="role" class="form-control" name="role_id" required value="{{old('role_id')}}">
                                                    <option value="">--Pilih--</option>
                                                    @foreach($role as $key => $value)
                                                        <option value="{{$value->id}}">{{$value->nama_role}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                <i class="fa fa-plus"></i> Tambah
                                            </button>
                                            <a href="{{route('Datauser.index')}}">
                                                <button type="button" class="btn btn-danger btn-sm">
                                                    Batal
                                                </button>
                                            </a>
                                        </div>
                                    </form>
                                </div>
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
