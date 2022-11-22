<title>Data Aset</title>

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
                            <!-- DATA TABLE -->
                            <h3 class="title-5 m-b-35">Data Barang</h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-right">
                                    <a href="{{route('Aset.create')}}">
                                    <button type="button" class="btn btn-primary">
                                        <i class="zmdi zmdi-plus"></i> tambah </button></a>
                                </div>
                            </div>
                            <div class="table-responsive table-data">
                                <table class="table" id="data_user">
                                    <thead>
                                        <tr>
                                            <td>Nama Barang</td>
                                            <td>Stok</td>
                                            <td>Tanggal</td>
                                            {{-- <td></td> --}}
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $key => $value)
                                        <tr>
                                            <td>
                                                <div class="table-data__info">
                                                    <h5>{{$value->nama_barang}}</h5>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="table-data__info">
                                                    <h6>{{$value->stok}}</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="table-data__info">
                                                    <h6>{{$value->tanggal}}</h6>
                                                </div>
                                            </td>
                                            {{-- <td>
                                                <span class="role admin">{{$value->nama_role}}</span>
                                            </td> --}}
                                            <td>
                                                <div class="table-data-feature">
                                                    <form action="{{route('Aset.edit', $value->id)}}">
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button></form>
                                                    <form action="{{route('Aset.destroy', $value->id)}}" method="POST" enctype="multipart/form-data">
                                                        @method('DELETE')
                                                        @csrf
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button></form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- END DATA TABLE -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->

</x-dashboard-layout>
