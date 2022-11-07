<title>Menu_Customer</title>

<x-dashboard-layout>
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
                                            <a href="#" class="btn btn-primary">Tambah</a>
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
</x-dashboard-layout>
