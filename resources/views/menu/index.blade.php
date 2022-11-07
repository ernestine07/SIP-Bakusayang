<title>Menu</title>

<x-dashboard-layout>
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
                                {{-- <div class="col col-md-3">
                                    <select name="selectSm" id="SelectLm" class="form-control-sm form-control">
                                        <option value="0">Kategori</option>
                                        <option value="1" >
                                            <a class="nav-link" href="{{route('menu.Menu_nonkopi')}}">Option #1</a>
                                        </option>
                                        <option value="2">Option #2</option>
                                        <option value="3">Option #3</option>
                                        <option value="4">Option #4</option>
                                        <option value="5">Option #5</option>
                                    </select>
                                </div> --}}
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
                                            @csrf
                                            <input type="hidden" name="menu_id" value={{$value->id}}>
                                            <a href="#" class="btn btn-primary" type="submit">Tambah</a>
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
                                            {{-- <button type="button" data-toggle="modal" data-target="#largeModal">
                                                Detail
                                            </button> --}}
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
        <!-- modal large -->
			<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						{{-- <div class="modal-header">
							<h5 class="modal-title" id="largeModalLabel">Detail {{$value->nama_menu}}</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div> --}}
						<div class="modal-body">
							<p>
								@foreach ($data as $key => $value)
                                        <center>
                                        <img src="{{asset('storage/'.$value->foto)}}" width="100" height="50" alt="foto">
                                        <div class="card-body">
                                            <h4 class="card-title mb-1">{{$value->nama_menu}}</h4>
                                            <p class="card-text">{{$value->harga}}</p>
                                            <a href="#" class="btn btn-primary">Tambah</a>
                                        </div>
                                        {{-- <button type="button" data-toggle="modal" data-target="#largeModal">
                                            Detail
                                        </button> --}}
                                        </center>
                                @endforeach
							</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							<button type="button" class="btn btn-primary">Confirm</button>
						</div>
					</div>
				</div>
			</div>
			<!-- end modal large -->
        <!-- END PAGE CONTAINER-->
</x-dashboard-layout>
