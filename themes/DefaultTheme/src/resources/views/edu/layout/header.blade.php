<!-- ============================================================== -->
<!-- Top header  -->
<!-- ============================================================== -->
<!-- Start Navigation -->
<div class="header header-light">
    <div class="container">
        <nav id="navigation" class="navigation navigation-landscape">
            <div class="nav-header">
                <a class="nav-brand" href="{{route('front.index')}}"><img src="#" class="logo" alt="" width="50"
                                                                                  height="50"/></a>
                <div class="nav-toggle"></div>
            </div>
            <div class="nav-menus-wrapper" style="transition-property: none;">
                <ul class="nav-menu">
                    <li><a href="{{route('front.index')}}">صفحه اصلی</a></li>
                    <li><a href="{{route('front.shop.index')}}">فروشگاه</a></li>
                    <li><a href="{{route('front.edu.courses')}}">آخرین دوره ها</a></li>
                    <li><a href="{{route('front.edu.classes')}}">آخرین کلاس ها</a></li>
                    <li><a href="#">تعمیرات</a></li>
                    <li><a href="#">بلاگ</a></li>
                </ul>

                <ul class="nav-menu nav-menu-social align-to-left">
                    @if(Route::has('login'))
                        <li class="login_click light">
                            <a href="{{route('login')}}" data-toggle="modal"
                               data-target="#login">ورود</a>
                        </li>
                        @if(Route::has('register'))
                            <li class="login_click bg-green">
                                <a href="{{route('register')}}" data-toggle="modal"
                                   data-target="#signup">ثبت نام</a>
                            </li>
                        @endif
                    @endif
                </ul>
            </div>
        </nav>
    </div>
</div>


<!-- Log In Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
        <div class="modal-content" id="registermodal">
            <span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
            <div class="modal-body">
                <h4 class="modal-header-title">ورود به حساب</h4>
                <div class="login-form">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label>نام کاربری</label>
                            <input type="text" class="form-control" name="username" placeholder="نام کاربری" required
                                   autocomplete="email">
                        </div>

                        <div class="form-group">
                            <label>رمز عبور</label>
                            <input type="password" class="form-control" name="password" placeholder="*******" required
                                   autocomplete="current-password">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-md full-width pop-login">ورود به حساب</button>
                        </div>

                    </form>
                </div>

                <div class="social-login mb-3">
                    <ul>
                        <li>
                            <input id="reg" class="checkbox-custom" name="reg" type="checkbox">
                            <label for="reg" class="checkbox-custom-label">ذخیره رمزعبور</label>
                        </li>
                        <li class="left"><a href={{--"#"--}} class="theme-cl">رمز عبور خود را فراموش کرده اید؟</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<!-- Sign Up Modal -->
<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="sign-up" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
        <div class="modal-content" id="sign-up">
            <span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
            <div class="modal-body">
                <h4 class="modal-header-title">ثبت نام</h4>
                <div class="login-form">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="نام" name="first_name"
                                   value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="نام خانوادگی" name="name"
                                   value="{{ old('last_name') }}" required autocomplete="last_name">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="نام کاربری" name="username"
                                   value="{{ old('username') }}" required autocomplete="username">
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="ایمیل" name="email"
                                   value="{{ old('email') }}" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="گذرواژه" name="password" required>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="تایید گذرواژه"
                                   name="password_confirmation" required>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-md full-width pop-login">ثبت نام</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->


<!-- End Navigation -->
<div class="clearfix"></div>
<!-- ============================================================== -->
<!-- Top header  -->
<!-- ============================================================== -->
