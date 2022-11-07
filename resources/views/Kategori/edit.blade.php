<title>Edit Menu</title>

<x-dashboard-layout>
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-header">
                            <h2>Edit Kategori</h2>
                        </div>
                        <div class="card">
                            <div class="card-body card-block">
                                <form action="{{route('Kategori.update', $data->id)}}" method="POST" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Nama Kategori</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="namakategori" required value="{{$data->nama_kategori}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            Simpan
                                        </button>
                                        <a href="{{route('Kategori.index')}}">
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
