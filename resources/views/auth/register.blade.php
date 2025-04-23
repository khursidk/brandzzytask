<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Metaveos technologies pvt ltd">
    <title>Login page</title>
    <!-- Favicon icon-->
    <link rel="icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <!-- Font awesome icon css -->
    <link rel="stylesheet" href="../assets/css/vendors/%40fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/vendors/%40fortawesome/fontawesome-free/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/vendors/%40fortawesome/fontawesome-free/css/brands.css">
    <link rel="stylesheet" href="../assets/css/vendors/%40fortawesome/fontawesome-free/css/solid.css">
    <link rel="stylesheet" href="../assets/css/vendors/%40fortawesome/fontawesome-free/css/regular.css">
    <!-- Ico Icon css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/%40icon/icofont/icofont.css">
    <!-- Flag Icon css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/flag-icon.css">
    <!-- Themify Icon css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/themify-icons/themify-icons/css/themify.css">
    <!-- Animation css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/animate.css/animate.css">
    <!-- Whether Icon css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/weather-icons/css/weather-icons.min.css">
    <!-- App css-->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
</head>

<body>
    <!-- tap to top-->
    <div class="tap-top">
        <svg class="feather">
            <use href="https://admin.pixelstrap.net/edmin/assets/svg/feather-icons/dist/feather-sprite.svg#arrow-up"></use>
        </svg>
    </div>
    <!-- login page start-->
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="login-card login-dark">
                    <div>
                        <div><a class="logo" href="index.html"><img class="img-fluid for-light" src="../assets/images/logo/logo.png" alt="looginpage"><img class="img-fluid for-dark m-auto" src="../assets/images/logo/dark-logo.png" alt="logo"></a></div>
                        <div class="login-main">
                            <form class="theme-form" method="POST" action="{{ route('register') }}">
                                @csrf

                                <h2 class="text-center">Sign up</h2>
                                <p class="text-center">Enter your name &amp; Details</p>
                                <div class="form-group">
                                    <label class="col-form-label">Name</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Email Address</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <div class="form-input position-relative">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                        <div class="show-hide"><span class="show"> </span></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Confirm Password</label>
                                    <div class="form-input position-relative">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">


                                     </div>
                                </div>
                                <div class="form-group mb-0 checkbox-checked">
                                    <div class="form-check checkbox-solid-info">
                                        <input class="form-check-input" id="solid6" type="checkbox">
                                        <label class="form-check-label" for="solid6">accept terms and condition</label>
                                    </div>  
                                    <div class="text-end mt-3">
                                        <button type="submit" class="btn btn-primary btn-block w-100 text-white">Sign up</button>
                                    </div>

                                    <p class="mt-4 mb-0 text-center">Already have account?<a class="ms-2" href="/login">Sign in </a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- jquery-->
        <script src="../assets/js/vendors/jquery/dist/jquery.min.js"></script>
        <!-- bootstrap js-->
        <script src="../assets/js/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/js/config.js"></script>
        <!-- scrollbar js-->
        <!-- scrollable-->
        <script src="../assets/js/password.js"></script>
        <!-- customizer-->
        <!-- custom script -->
        <script src="../assets/js/script.js"></script>
    </div>
</body>

</html>