<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ASA TECHNOVASINDO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh">
        <div class="card p-5" style="box-shadow: 0px 0px 5px gray; width: 450px">
            <div class="card-body">
                <h4 class="card-title mb-4 text-center fw-bold text-primary">LOGIN ADMIN</h4>
                <form action="/login" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password"
                            class="form-control form-control-sm @error('password') is-invalid @enderror" id="password"
                            name="password">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="/js/script_admin.js"></script>
</body>

</html>
