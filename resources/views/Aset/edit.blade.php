<title>Edit Barang</title>

<x-dashboard-layout>
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-header">
                            <h2>Edit Barang</h2>
                        </div>
                        <div class="card">
                            <div class="card-body card-block">
                                <form action="{{route('Aset.update', $aset->id)}}" method="POST" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Tanggal<sup class="text-danger">*</sup></label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="date" id="tanggal" name="tanggal" required value="{{$aset->tanggal}}" class="form-control">
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
                                            <label for="text-input" class=" form-control-label">Nama Barang<sup class="text-danger">*</sup></label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="aset" required value="{{$aset->nama_barang}}" class="form-control">
                                            <div class="text-danger">
                                                @error('name')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Qty<sup class="text-danger">*</sup></label>
                                        </div>
                                        <div class="col-2">
                                            <input type="number" id="text-input" name="qty" required value="{{$aset->stok}}" class="form-control" required>
                                            <div class="text-danger">
                                                @error('qty')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            Simpan
                                        </button>
                                        <a href="{{route('Aset.index')}}">
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
