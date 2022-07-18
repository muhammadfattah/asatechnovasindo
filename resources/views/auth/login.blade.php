<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ASA TECHNOVASINDO</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center py-4">
                <span class="h3 font-weight-bold text-primary">LOGIN</s>
            </div>
            <div class="card-body py-4 pb-5">
                <form action="/login" method="post">
                    @csrf
                    <div class="input-group mb-4">
                        <input type="text" class="form-control  @error('username') is-invalid @enderror"
                            placeholder="Username" id="username" name="username" value="{{ old('username') }}"
                            value="{{ old('username') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        @error('username')
                            <div class="mt-2 ml-1 invalid-feedback">{{ ucfirst($message) }}</div>
                        @enderror
                    </div>
                    <div class="input-group mb-4">
                        <input type="password" class="form-control  @error('password') is-invalid @enderror"
                            placeholder="Password" id="password" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-key"></span>
                            </div>
                        </div>
                        @error('password')
                            <div class="mt-2 ml-1 invalid-feedback">{{ ucfirst($message) }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->
    <!-- Sweet Alert Message -->
    @if (session()->has('message'))
        <div class="flashdata" style="display: none;">
            <div class="data-icon">{{ session('message')['icon'] }}</div>
            <div class="data-title">{{ session('message')['title'] }}</div>
            <div class="data-text">{{ session('message')['text'] }}</div>
            @if (array_key_exists('to_id', session('message')))
                <div class="data-to_id">{{ session('message')['to_id'] }}</div>
            @endif
        </div>
    @endif
    <!-- jQuery -->
    <script src="/plugins/jquery/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Bootstrap 4 -->
    <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/dist/js/adminlte.min.js"></script>

    <script src="/js/script_admin.js"></script>
</body>

</html>
