<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MONA Admin | Login</title>
    @include('admin.elements.header-libs')
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="#" class="h1"><b>MONA</b>SHOP</a>
        </div>
        <div class="card-body">
            <div class="error">
                <ul>
                    @if ($errors -> any())
                        {{--                    {{ dd($errors) }}--}}
                        @foreach($errors->all() as $key => $value)
                            <li class="text-danger">{{ $value }}</li>
                        @endforeach
                    @endif
                </ul>
            </div>
            <?php
            $message = Session::get('message');
            if ($message) {
                echo '<span class="text-danger">' . $message . '</span>';
                Session::put('message', null);
            }
            ?>
            <form action="{{ route("admin.login") }}" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

@include('admin.elements.footer-libs')
<script>
    @if ($errors -> any())
        toastr.options.closeMethod = 'fadeOut';
    toastr.options.closeDuration = 100;
    toastr.options.closeEasing = 'swing';
    toastr.options.timeOut = 1000; // How long the toast will display without user interaction
    toastr.options.extendedTimeOut = 60; // How long the toast will display after a user hovers over it
    toastr.error("Login Fail","Fail");
    @endif
</script>
</body>
</html>
