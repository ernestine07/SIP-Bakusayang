<title>Kategori</title>

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
                                <h2>Daftar Kategori</h2>
                                <div class="card-body">
                                    <a href="{{route('Kategori.create')}}">
                                    <button type="button" class="btn btn-primary btn-sm">
                                    <i class="fa fa-plus"></i> Tambah Kategori
                                    </button>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                @foreach ($data as $key => $value)
                                <div class="col-sm-3">
                                    <div class="card-menu">
                                        <center>
                                        <div class="card-body">
                                            <p class="card-text">{{$value->nama_kategori}}</p>
                                        </div>
                                        <div class="table-data-feature">
                                            <a href="{{route('Kategori.edit', $value->id)}}">
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="zmdi zmdi-edit"></i></a>
                                            </button>
                                            <form action="{{route('Kategori.destroy', $value->id)}}" method="POST" enctype="multipart/form-data">
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

</x-dashboard-layout>
