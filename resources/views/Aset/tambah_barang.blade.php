<title>Tambah Barang</title>

<x-dashboard-layout>
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-header">
                            <h2>Tambah Barang</h2>
                        </div>
                        <div class="card">
                            <div class="card-body card-block">
                                <form method="post" action="{{route('aset')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Tanggal<sup class="text-danger">*</sup></label>
                                        </div>
                                        <div class="col-4">
                                            <input id="tanggal" name="tanggal" type="date" class="form-control tanggal" value="" placeholder="DD / MM / YY" autocomplete="tanggal" required>
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
                                            <input type="text" id="text-input" name="aset" placeholder="Text" class="form-control" required>
                                            <div class="text-danger">
                                                @error('name')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-3">
                                            <label for="text-input" class=" form-control-label">Qty<sup class="text-danger">*</sup></label>
                                        </div>
                                        <div class="col-2">
                                            <input type="number" id="text-input" name="qty" placeholder="0" class="form-control" required>
                                            <div class="text-danger">
                                                @error('qty')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-plus"></i> Tambah
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
