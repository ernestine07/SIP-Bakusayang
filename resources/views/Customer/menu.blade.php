<title>Menu_Customer</title>

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
                                <h2>Daftar Menu</h2>
                            </div>
                            <div class="row">
                                @foreach ($data as $key => $value)
                                <div class="col-sm-3">
                                    <div class="card-menu">
                                        <center>
                                            <img src="{{asset('storage/'. $value->foto_produk)}}" width="100" height="50" alt="foto">
                                        <div class="card-body">
                                            <h4 class="card-title mb-1">{{$value->nama_menu}}</h4>
                                            <p class="card-text">{{$value->harga}}</p>
                                            {{-- <a href="#" class="btn btn-primary">Tambah</a> --}}
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
        <!-- modal large -->
			{{-- <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content"> --}}
						{{-- <div class="modal-header">
							<h5 class="modal-title" id="largeModalLabel">Detail {{$value->nama_menu}}</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div> --}}
						{{-- <div class="modal-body">
							<p>
								@foreach ($data as $key => $value)
                                        <center>
                                        <img src="{{asset('storage/'.$value->foto)}}" width="100" height="50" alt="foto">
                                        <div class="card-body">
                                            <h4 class="card-title mb-1">{{$value->nama_menu}}</h4>
                                            <p class="card-text">{{$value->harga}}</p>
                                            <a href="#" class="btn btn-primary">Tambah</a>
                                        </div> --}}
                                        {{-- <button type="button" data-toggle="modal" data-target="#largeModal">
                                            Detail
                                        </button> --}}
                                        {{-- </center>
                                @endforeach
							</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							<button type="button" class="btn btn-primary">Confirm</button>
						</div>
					</div>
				</div>
			</div> --}}
			<!-- end modal large -->
        <!-- END PAGE CONTAINER-->
    </div>
</x-dashboard-layout>
