<x-login-layout>
    <div class="login-wrap">
        <div class="login-content">
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
                            <a href="{{url('lupa_password')}}">Forgotten Password?</a>
                        </label>
                    </div>
                    <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
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
</x-login-layout>
