<!doctype html>
<html lang="en">


<!-- Mirrored from friendkit.cssninja.io/login-minimal.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Oct 2023 10:46:14 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <title>Friendkit | Login</title>
    <script src="cdn-cgi/apps/head/lmplkzhV3pH6fdNUw6kpmpBQ68Q.js"></script>
    <link rel="icon" type="image/png" href="{{asset('assets')}}/img/favicon.png" />

    <!-- Google Tag Manager -->
    <script>
        ;
        (function(w, d, s, l, i) {
            w[l] = w[l] || []
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            })
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : ''
            j.async = true
            j.src = '../www.googletagmanager.com/gtm5445.html?id=' + i + dl
            f.parentNode.insertBefore(j, f)
        })(window, document, 'script', 'dataLayer', 'GTM-KQHJPZP')
    </script>
    <!-- End Google Tag Manager -->

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:600,700,800,900" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/app.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/css/core.css" />


    <style>
        label.error {
            color: #dc3545;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQHJPZP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Pageloader -->
    <div class="pageloader"></div>
    <div class="infraloader is-active"></div>

    <div class="signup-wrapper">
        <!--Fake navigation-->
        <div class="fake-nav">
            <a href="index.html" class="logo">
                <img class="light-image" src="{{asset('assets')}}/img/vector/logo/friendkit-bold.svg" width="112" height="28" alt="" />
                <img class="dark-image" src="{{asset('assets')}}/img/vector/logo/friendkit-white.svg" width="112" height="28" alt="" />
            </a>
        </div>


        <div class="container">
            <!--Container-->
            <div class="login-container">
                <div class="columns is-vcentered">
                    <div class="column is-6 image-column">
                        <!--Illustration-->
                        <img class="light-image login-image" src="{{asset('assets')}}/img/illustrations/login/login.svg" alt="" />
                        <img class="dark-image login-image" src="{{asset('assets')}}/img/illustrations/login/login-dark.svg" alt="" />
                    </div>
                    <div class="column is-6">
                        <h2 class="form-title">Welcome Back</h2>
                        <h3 class="form-subtitle">Enter your credentials to sign in.</h3>

                        <!--Form-->
                        <form action="{{route('login_check')}}" method="POST" enctype="multipart/form-data" id="loginForm">
                            @csrf
                            <div class="login-form">
                                <div class="form-panel">
                                    <div class="field">
                                        <label>Email</label>
                                        <div class="control">
                                            <input type="email" class="input" placeholder="Enter your email address" name="email" />
                                        </div>
                                        @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                    </div>
                                    <div class="field">
                                        <label>Password</label>
                                        <div class="control">
                                            <input type="password" class="input" placeholder="Enter your password" name="password" />
                                        </div>
                                        @error('password')
                                        <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="field is-flex">
                                        <div class="switch-block">
                                            <label class="f-switch">
                                                <input type="checkbox" class="is-switch" />
                                                <i></i>
                                            </label>
                                            <div class="meta">
                                                <p>Remember me?</p>
                                            </div>
                                        </div>
                                        <a>Forgot Password?</a>
                                    </div>
                                </div>

                                <div class="buttons">
                                    <button type="submit" class="button is-solid primary-button is-fullwidth raised">Login</button>
                                </div>

                                <div class="account-link has-text-centered">
                                    <a href="{{route('registration')}}">Don't have an account? Sign Up</a>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Concatenated js plugins and jQuery -->
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{asset('assets')}}/js/app.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="{{asset('assets')}}/data/tipuedrop_content.js"></script>

    <!-- Core js -->
    <script src="{{asset('assets')}}/js/global.js"></script>

    <!-- Navigation options js -->
    <script src="{{asset('assets')}}/js/navbar-v1.js"></script>
    <script src="{{asset('assets')}}/js/navbar-v2.js"></script>
    <script src="{{asset('assets')}}/js/navbar-mobile.js"></script>
    <script src="{{asset('assets')}}/js/navbar-options.js"></script>
    <script src="{{asset('assets')}}/js/sidebar-v1.js"></script>

    <!-- Core instance js -->
    <script src="{{asset('assets')}}/js/main.js"></script>
    <script src="{{asset('assets')}}/js/chat.js"></script>
    <script src="{{asset('assets')}}/js/touch.js"></script>
    <script src="{{asset('assets')}}/js/tour.js"></script>

    <!-- Components js -->
    <script src="{{asset('assets')}}/js/explorer.js"></script>
    <script src="{{asset('assets')}}/js/widgets.js"></script>
    <script src="{{asset('assets')}}/js/modal-uploader.js"></script>
    <script src="{{asset('assets')}}/js/popovers-users.js"></script>
    <script src="{{asset('assets')}}/js/popovers-pages.js"></script>
    <script src="{{asset('assets')}}/js/lightbox.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $("#loginForm").validate({
                rules: {

                    email: {
                        required: true,
                        email: true,
                    },
                    password: {
                        required: true,
                        minlength: 5
                    },

                },
                messages: {

                    email: {
                        required: "Email is required",
                        email: "Email must be a valid email address",
                    },

                    password: {
                        required: "Password is required",
                        minlength: "Password must be at least 5 characters"
                    },

                }
            });
        });
    </script>


    <!-- Landing page js -->

    <!-- Signup page js -->

    <!-- Feed pages js -->

    <!-- profile js -->

    <!-- stories js -->

    <!-- friends js -->

    <!-- questions js -->

    <!-- video js -->

    <!-- events js -->

    <!-- news js -->

    <!-- shop js -->

    <!-- inbox js -->

    <!-- settings js -->

    <!-- map page js -->

    <!-- elements page js -->
    @include('notifications.notification')

</body>


<!-- Mirrored from friendkit.cssninja.io/login-minimal.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Oct 2023 10:46:15 GMT -->

</html>