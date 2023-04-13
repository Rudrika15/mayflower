
<!DOCTYPE html>
<html lang="en" id="single-wrapper">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" class="bi bi-flower1" sizes="192x192" href="#">

    <title>Mayflower</title>
    <link rel="stylesheet" href="{{asset('assets/styles/style.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/styles/color.css')}}">

    <!-- Waves Effect -->
    <link rel="stylesheet" href="{{asset('assets/css/waves.min.css')}}">

    <!-- bootstrap 5 cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>


<body>
    <div id="single-wrapper">
        <div class="w-50">
            <form action="{{ route('register') }}" method="post" class="frm-single">

                @csrf

                <div class="inside">
                    <div class="frm-title">
                        <!-- <img src="{{asset('asset/img/logo.png')}}" alt="" style="height: 25%; width:25%;"> -->
                        <h2 style="color: pink;">Mayflower <i class="bi bi-flower1" style="color: hotpink;"></i></h2>
                    </div>
                    <!-- /.title -->
                    <div class="frm-title">Login</div>
                    <!-- /.frm-title -->
                    <div class="frm-input" style="width: 90%;">
                        <input type="text" placeholder="Name" class="frm-inp @error('name') is-invalid @enderror" value="{{ old('name') }}" id="name" name="name"><i class="fa fa-user frm-ico"></i>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="frm-input" style="width: 90%;">
                        <input type="text" placeholder="Email" class="frm-inp @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" name="email"><i class="fa fa-at frm-ico"></i>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <!-- /.frm-input -->
                    <div class="frm-input" style="width: 90%;"><input type="password" placeholder="Password" class="frm-inp @error('password') is-invalid @enderror" id="password" name="password"><i class="fa fa-lock frm-ico"></i>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="frm-input" style="width: 90%;"><input type="password" placeholder="password-confirm" class="frm-inp @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation"><i class="fa fa-lock frm-ico"></i>
                        @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <!-- /.frm-input -->
                    <div class="clearfix margin-bottom-20 margin-top-20">
                        <div class="pull-left">
                            <div class="checkbox primary"><input type="checkbox" id="rememberme"><label for="rememberme">Remember me</label></div>
                            <!-- /.checkbox -->
                        </div>
                        <!-- /.pull-left -->
                        @if (Route::has('password.request'))
                        <div class="pull-right"><a href="{{ route('password.request') }}" class="a-link"><i class="fa fa-unlock-alt"></i>Forgot password?</a></div>
                        @endif
                        <!-- /.pull-right -->
                    </div><br><br>
                    <!-- /.clearfix -->
                    <button type="submit" class="frm-submit">Login<i class="fa fa-arrow-circle-right"></i></button>

                    <!-- /.row -->
                    <a href="{{ route('login') }}" class="a-link"><i class="fa fa-key"></i> User Login here.</a>

                    <!-- /.footer -->
                </div>
                <!-- .inside -->
            </form>
            <!-- /.frm-single -->
        </div>
    </div>
    <!--/#single-wrapper -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

    <!-- 
	================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('assets/scripts/jquery.min.js')}}"></script>
    <script src="{{asset('assets/scripts/modernizr.min.js')}}"></script>
    <script src="{{asset('assets/scripts/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/scripts/nprogress.js')}}"></script>
    <script src="{{asset('assets/scripts/waves.min.js')}}"></script>

    <script src="{{asset('assets/scripts/main.min.js')}}"></script>
</body>

</html>