<title>Data User</title>

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
                                <h2>Data User</h2>
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary btn-sm">
                                    <i class="fa fa-plus"></i> <a href="{{route('Datauser.create')}}"> Tambah Data</a>
                                    </button>
                            </div>
                            <!-- USER DATA-->
                            <div class="table-responsive table-data">
                                <table class="table" id="data_user">
                                    <thead>
                                        <tr>
                                            <td>Nama</td>
                                            <td>Username</td>
                                            <td>Email</td>
                                            <td>posisi</td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $key => $value)
                                        <tr>
                                            <td>
                                                <div class="table-data__info">
                                                    <h5>{{$value->name}}</h5>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="table-data__info">
                                                    <h6>{{$value->username}}</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="table-data__info">
                                                    <h6>{{$value->email}}</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="role admin">{{$value->nama_role}}</span>
                                            </td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <a href="{{route('Datauser.edit', $value->id)}}">
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit"></i></a>
                                                    </button>
                                                    <form action="{{route('Datauser.destroy', $value->id)}}" method="POST" enctype="multipart/form-data">
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
                            <!-- END USER DATA-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
</x-dashboard-layout>
