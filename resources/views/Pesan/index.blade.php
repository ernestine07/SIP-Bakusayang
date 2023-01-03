<title>Kritik dan Saran</title>

<x-dashboard-layout>
        <!-- Main content -->
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
                      <div class="col">
                        <div class="card">
                          <div class="card-header">
                            <h3>
                              Kritik dan Saran
                            </h3>
                          </div>
                          <div class="card-body">
                            <form method="post" action="{{route('Pesan.store')}}" enctype="multipart/form-data" id="algin-form">
                                @csrf
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Tanggal<sup class="text-danger">*</sup></label>
                                    </div>
                                    <div class="col-4">
                                        <input id="tanggal" name="tanggal" type="date" class="form-control tanggal" value="" placeholder="DD / MM / YY" autocomplete="tanggal">
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
                                            <label for="name">Name</label>
                                        </div>
                                        <div class="col-4">
                                            {{Auth::user()->name}}
                                        </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="col-4">
                                        {{Auth::user()->email}}
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Kritik dan Saran<sup class="text-danger">*</sup></label>
                                    </div>
                                    <div class="col-4">
                                        {{-- <textarea name="msg" id=""msg cols="30" rows="5" class="form-control"></textarea> --}}
                                        <textarea class="form-control" name="pesan" placeholder="*Silahkan masukkan kritik dan saran anda" id="floatingTextarea"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm">
                                     Unggah
                                </button>
                            </form>
                          </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3>Komentar</h3>
                            </div>
                            <div class="card-body">
                                <div class="comment mt-4 text-justify float-left">
                                    <h4>{{Auth::user()->name}}</h4>
                                    <span>- 20 October, 2018</span>
                                    <br>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus numquam assumenda hic aliquam vero sequi velit molestias doloremque molestiae dicta?</p>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
</x-dashboard-layout>
