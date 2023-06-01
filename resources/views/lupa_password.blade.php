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
                        <div class="login-logo">
                            <img src="{{asset('template/images/icon/logo_full.png')}}"  width="200" height="100" alt="Logo cafe">
                        </div>
                        <div class="login-form">
                            <form action="{{route('verifikasi')}}" method="post">
                            @csrf
                                <div class="alert alert-success bg-soft-primary border-0" role="alert">
                                    silahkan masukkan email anda dan kami akan mengirimkan instruksi untuk reset password anda.
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">kirim</button>
                                <div class="register-link">
                                    <label>
                                        <a href="{{url('login')}}">Sign In</a>
                                    </label>
                                </div>
                            </form>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-login-layout>
