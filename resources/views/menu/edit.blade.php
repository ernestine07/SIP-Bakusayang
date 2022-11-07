<title>Edit Menu</title>

<x-dashboard-layout>
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-header">
                            <h2>Edit Menu</h2>
                        </div>
                        <div class="card">
                            <div class="card-body card-block">
                                <form action="{{route('menu.update', $data->id)}}" method="POST" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Kode Menu</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="kodemenu" required value="{{$data->kode_menu}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Kode Barang</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="kodebarang" required value="{{$data->kode_barang}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Nama Menu</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="menu" required value="{{$data->nama_menu}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="select" class=" form-control-label">Kategori</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select id="select" class="form-control" name="kategori_id" required value="{{$data->nama_menu}}">
                                                <option value="">--Pilih--</option>
                                                @foreach($kategori as $key => $value)
                                                @if ($value->id==$data->kategori_id)
                                                    <option value="{{$value->id}}" selected>{{$value->nama_kategori}}</option>
                                                @else
                                                    <option value="{{$value->id}}">{{$value->nama_kategori}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Harga</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="harga" required value="{{$data->harga}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="file-input" class=" form-control-label">Foto Produk</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="file" id="file-input" name="foto" class="form-control-file" required value="{{ asset('storage/app/public'.$data->foto_produk) }}">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            Simpan
                                        </button>
                                        <a href="{{route('menu.index')}}">
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
</x-dashboard-layout>
