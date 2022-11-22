<title>Data Pegawai</title>

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
                                <h2>Data Pegawai</h2>
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary btn-sm">
                                    <i class="fa fa-plus"></i> <a href="{{route('pegawai.create')}}"> Tambah Pegawai</a>
                                    </button>
                            </div>
                            <!-- USER DATA-->
                            <div class="user-data m-b-30">
                                <div class="filters m-b-45">
                                    <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                                        <select class="js-select2" name="property">
                                            <option selected="selected">Semua</option>
                                            <option value="">Admin</option>
                                            <option value="">Kasir</option>
                                            <option value="">Dapur</option>
                                            <option value="">Aset</option>
                                            <option value="">Pemilik</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                                <div class="table-responsive table-data">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td>foto</td>
                                                <td>name</td>
                                                <td>no telp</td>
                                                <td>posisi</td>
                                                <td>ket</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pegawai as $key => $value)
                                            <tr>
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <img src="{{asset('storage/'.$value->foto)}}" width="60" height="30" alt="foto">
                                                </td>
                                                <td>
                                                    <div class="table-data__info">
                                                        <h5>{{$value->nama_pegawai}}</h5>
                                                        {{-- <span>
                                                            <a href="#">{{$value->akun}}</a>
                                                            <h6>{{$value->akun}}</h6>
                                                        </span> --}}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-data__info">
                                                        <h6>{{$value->no_telp}}</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="role admin">{{$value->nama_role}}</span>
                                                </td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a href="{{route('pegawai.edit', $value->id)}}">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i></a>
                                                        </button>
                                                        <form action="{{route('pegawai.destroy', $value->id)}}" method="POST" enctype="multipart/form-data">
                                                            @method('DELETE')
                                                            @csrf
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END USER DATA-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
</x-dashboard-layout>
