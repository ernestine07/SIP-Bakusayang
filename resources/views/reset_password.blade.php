    <!-- Title Page-->
    <title>Lupa Password</title>

<x-login-layout>
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
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
                        <form method="POST" action="{{route('lihat_reset_password')}}">
                            @csrf
            
                            <input type="hidden" name="token" value="{{ $token}}">
            
                            <div class="form-group">
                                <label class="font-weight-bold text-uppercase">Email Address</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ $request->email ?? old('email') }}" required autocomplete="email" autofocus placeholder="Masukkan Alamat Elamil">
                                @error('email')
                                <div class="alert alert-danger mt-2">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
            
                            <div class="form-group">
                                <label class="font-weight-bold text-uppercase">Password</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="new-password" placeholder="Masukkan Password Baru">
                                @error('password')
                                <div class="alert alert-danger mt-2">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
            
                            <div class="form-group">
                                <label class="font-weight-bold text-uppercase">Konfirmasi Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                    required autocomplete="new-password" placeholder="Masukkan Konfirmasi Password Baru">
                            </div>

                            <button type="submit" class="btn btn-primary btn-block" href="{{url('login')}}">RESET PASSWORD</button>
                        </form>             
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-login-layout>
