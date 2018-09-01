<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Administracion de alquileres">
    <meta name="author" content="JC">

    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <title>NUNNAN - Alquileres</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>

    <script src="assets/js/modernizr.min.js"></script>

</head>
<body>

<div class="account-pages"></div>
<div class="clearfix"></div>

<div class="wrapper-page">
    <div class="card-box">
        <div class="panel-heading">
            <h4 class="text-center"> Bienvenido a <strong>NUNNAN</strong></h4>
        </div>

        <div class="p-20">
            <form class="form-horizontal m-t-20" method="POST" action="{{ route('login') }}"
                  aria-label="{{ __('Login') }}">
                @csrf
                <div class="form-group-custom">
                    <input type="email" id="email" name="email" value="{{ old('email') }}"/>

                    <label class="control-label" for="email">Usuario</label><i class="bar"></i>

                    @if ($errors->has('email'))
                        <small class="form-text text-danger">
                            <strong>{{ $errors->first('email') }}</strong>
                        </small>
                    @endif

                </div>
                <div class="form-group-custom">
                    <input type="password" id="password" name="password"/>
                    <label class="control-label" for="password">Contraseña</label><i class="bar"></i>

                    @if ($errors->has('password'))
                        <small class="form-text text-danger">
                            <strong>{{ $errors->first('password') }}</strong>
                        </small>
                    @endif
                </div>
                <div class="form-group ">
                    <div class="col-12">
                        <div class="checkbox checkbox-primary">
                            <input id="remember" type="checkbox" name="remember">
                            <label for="remember"> Recordar </label>
                        </div>

                    </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-12">
                        <button class="btn btn-primary btn-block text-uppercase waves-effect waves-light" type="submit">
                            Ingresar
                        </button>
                    </div>
                </div>

                <div class="form-group m-t-20 m-b-0">
                    <div class="col-12">
                        <a href="{{ route('password.request') }}" class="text-dark"><i class="fa fa-lock m-r-5"></i>
                            Olvido su contraseña?</a>
                    </div>
                </div>
                <div class="form-group m-t-40 m-b-0">
                    <div class="col-12 text-center">
                        <h5 class="font-18"><b>Ingresar con</b></h5>
                    </div>
                </div>
                <div class="form-group m-b-0 text-center">
                    <div class="col-12">
                        <a type="button" class="btn btn-sm btn-facebook waves-effect waves-light m-t-20"
                                href="{{ route('login.social','facebook') }}">
                            <i class="fa fa-facebook m-r-5"></i> Facebook
                        </a>
                        <a type="button" class="btn btn-sm btn-googleplus waves-effect waves-light m-t-20"
                           href="{{ route('login.social','google')}}">
                            <i class="fa fa-google-plus m-r-5"></i> Google+
                        </a>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <p class="text-white">
                No tiene una cuenta con nosotros? <a href="{{ route('register') }}" class="text-white m-l-5"><b>Registrar</b></a>
            </p>
        </div>
    </div>

</div>

<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script><!-- Popper for Bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>

<script src="assets/js/jquery.core.js"></script>
<script src="assets/js/jquery.app.js"></script>

</body>
