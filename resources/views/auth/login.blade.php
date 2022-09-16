<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="" name="Boom Solutions - Payment" />
    <meta content="" name="Ing. Luis Campos - campos.luis19@gmail.com" />

    <link rel="icon" type="image/x-icon" href="{{ asset('src/assets/images/favicon.png') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/components/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/assets/icon/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/assets/icon/icofont/css/icofont.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/assets/icon/feather/css/feather.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/assets/css/style.css') }}">
</head>

<body>
    
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>

    <div id="pcoded" class="pcoded load-height">
        <div class="pcoded-overlay-box"></div>
        <section class="login-block with-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                    <div id="errors-list"></div>
                        <form method="post" class="md-float-material form-material m-t-40 m-b-40" id="handleLogin" action="{{ route('login') }}" name="handleLogin">
                            @csrf
                            <div class="auth-box card">
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-md-12" style="text-align: center;">
                                            <img src="{{ asset('src/assets/images/logicon.png') }}" alt="Boom Solutions">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row m-b-20">
                                        <div class="col-md-6">
                                            <a href="https://www.facebook.com/boomsolutionsve/" class="btn btn-facebook m-b-20 btn-block"><i class="icofont icofont-social-facebook"></i>facebook</a>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="https://www.instagram.com/boomsolutionsve" class="btn btn-instagram m-b-20 btn-block" style="background-color: #C13584"><i class="icofont icofont-social-instagram" ></i>instagram</a>
                                        </div>
                                    </div>
                                    <div class="form-group form-primary">
                                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="Username">

                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <span class="form-bar"></span>
                                    </div>
                                    <div class="form-group form-primary">                                    
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password">
                                        <span class="form-bar"></span>

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group form-primary">
                                        <div class="checkbox-fade fade-in-primary d-">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">Remember me</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row m-t-30">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Login</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <div class="footer bg-inverse">
        <p class="text-center">Copyright &copy; <?php echo date("Y"); ?> <a style="color: white;" href="https://boomsolutionsve.com">Boom Solutions C.A</a>, All rights reserved.</p>
    </div>

    <script type="text/javascript" src="{{ asset('src/components/jquery/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/components/jquery-ui/js/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/components/popper.js/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/components/bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/components/jquery-slimscroll/js/jquery.slimscroll.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/components/modernizr/js/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/components/modernizr/js/css-scrollbars.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/components/i18next/js/i18next.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/components/i18next-xhr-backend/js/i18nextXHRBackend.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/components/jquery-i18next/js/jquery-i18next.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('src/assets/js/script.js') }}"></script>

</body>

</html>
