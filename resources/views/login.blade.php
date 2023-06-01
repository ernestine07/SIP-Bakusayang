<x-login-layout>
    <div class="login-wrap">
        <div class="card-body">
            <div class="login-content">
                @if ($message = Session::get('success'))
                <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                    <span class="badge badge-pill badge-success">Berhasil</span>
                    {{ $message }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                @if ($message = Session::get('failed'))
                <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                    <span class="badge badge-pill badge-danger">Failed</span>
                    Gagal Login
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                <div class="login-logo">
                    <img src="{{asset('template/images/icon/logo_full.png')}}"  width="200" height="100" alt="Logo cafe">
                </div>
                <div class="login-form">
                    <form action="{{route('auth.login')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>User Name</label>
                            <input class="au-input au-input--full" type="username" name="username" placeholder="Username" autofocus required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                        </div>
                        <div class="login-checkbox">
                            <label>
                                <a href="{{route('lupa_password')}}">Lupa Password?</a>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">
                            Login
                        </button>
                        <a href="{{url('/')}}">
                        <button type="button" class="btn btn-danger btn-sm">
                            Batal
                        </button></a>
                    </form>
                    <div class="register-link">
                        <p>
                            Don't you have account?
                            <a href="{{url('register_customer')}}">Sign Up Here</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-login-layout>
