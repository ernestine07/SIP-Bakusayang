<x-login-layout>
    <div class="login-wrap">
        <div class="login-content">
            @if ($message = Session::get('success'))
            <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                <span class="badge badge-pill badge-success">Success</span>
                {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <div class="card-body">
                <div class="login-logo">
                    <img src="{{asset('template/images/icon/logo_full.png')}}" width="200" height="100" alt="Logo cafe" />
                </div>
                <div class="login-form">
                    <form action="{{route('auth.register')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Nama</label>
                            <input class="au-input au-input--full" type="text" name="name" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="input-normal" class=" form-control-label">Jenis Kelamin</label>
                            <div class="col-sm-15">
                                <select id="SelectLm" name="jeniskelamin" class="form-control-sm form-control">
                                    <option value="">Silahkan Pilih</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input class="au-input au-input--full" type="text" name="alamat" placeholder="Alamat">
                        </div>
                        <div class="form-group">
                            <label>No telp</label>
                            <input class="au-input au-input--full" type="text" name="notelp" placeholder="No Telp">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input class="au-input au-input--full" type="text" name="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="au-input au-input--full" type="text" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="au-input au-input--full" type="text" name="email" placeholder="Email">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">
                            register
                        </button>
                        <a href="{{url('/')}}">
                        <button type="button" class="btn btn-danger btn-sm">
                            Batal
                        </button></a>
                    </form>
                    <div class="register-link">
                        <p>
                            Sudah Punya akun?
                            <a href="{{url('login')}}">Login</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-login-layout>
