<!doctype html>
<html lang="en">

<head>
        <link rel="apple-touch-icon" sizes="180x180" href="/theme/assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/theme/assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/theme/assets/img/favicon-16x16.png">
    <link rel="manifest" href="/theme/assets/img/site.webmanifest">
    <title>Masuk | SIHAKI</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../themelogin/css/style.css">

</head>

<body class="img js-fullheight" style="background-image: url(/themelogin/img/bg3.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h1 class="mb-4 text-center text-white"><b>SIHAKI</b></h1>
                        <p style="margin-top: -20px; margin-bottom: 20px; text-align:center">(Sistem Informasi Manajemen Sentra HKI)</p>
                        <form action="{{ route('login') }} " method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" placeholder="Nomor Induk Karyawan" required>
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password" name="password" class="form-control" placeholder="Kata Sandi" required>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control bg-primary px-3">Masuk</button>
                            </div>
                            @if ($errors->has('login_failed'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('login_failed') }}
                                </div>
                            @endif
                            <div class="form-group d-md-flex">
                              <div class="w-50">
                                <label class="checkbox-wrap checkbox-primary">Ingat saya
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                                </label>
                              </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="/themelogin/js/jquery.min.js"></script>
    <script src="/themelogin/js/popper.js"></script>
    <script src="/themelogin/js/bootstrap.min.js"></script>
    <script src="/themelogin/js/main.js"></script>

</body>

</html>
