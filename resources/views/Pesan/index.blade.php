<title>Kritik dan Saran</title>

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
                      <div class="col">
                        <div class="card">
                          <div class="card-header">
                            <h3>
                              Kritik dan Saran
                            </h3>
                          </div>
                          <div class="card-body">
                            <form method="post" action="{{route('store')}}" enctype="multipart/form-data" id="algin-form">
                                @csrf
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Tanggal<sup class="text-danger">*</sup></label>
                                    </div>
                                    <div class="col-4">
                                        <input id="tanggal" name="tanggal" type="date" class="form-control tanggal" value="" placeholder="DD / MM / YY" autocomplete="tanggal">
                                            <span class="help-block" data-valmsg-for="tanggal" data-valmsg-replace="true"></span>
                                        <div class="text-danger">
                                            @error('tanggal')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="name">Name</label>
                                        </div>
                                        <div class="col-4">
                                            <input id="nama" name="name" type="text" class="form-control " value="{{$user->name}}" readonly/>
                                        </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="col-4">
                                        <input id="email" name="email" type="text" class="form-control " value="{{$user->email}}" readonly/>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Kritik dan Saran<sup class="text-danger">*</sup></label>
                                    </div>
                                    <div class="col-4">
                                        {{-- <textarea name="msg" id=""msg cols="30" rows="5" class="form-control"></textarea> --}}
                                        <textarea class="form-control" name="pesan" placeholder="*Silahkan masukkan kritik dan saran anda" id="floatingTextarea"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm">
                                     Unggah
                                </button>
                            </form>
                          </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3>Komentar</h3>
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    @foreach ($data as $value)
                                    <div class="comment card-menu">
                                        {{-- <div class="comment mt-4 text-justify float-left"> --}}
                                            <h4>{{$value->name}}</h4>
                                            <span>{{$value->tanggal}}</span>
                                            <br>
                                            <p>{{$value->pesan}}</p>
                                        {{-- </div> --}}
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>
