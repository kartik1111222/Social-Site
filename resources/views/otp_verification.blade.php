<!doctype html>
<html lang="en">


<!-- Mirrored from friendkit.cssninja.io/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Oct 2023 10:45:20 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <title>Friendkit | Sign Up</title>
    <!-- <script src="cdn-cgi/apps/head/lmplkzhV3pH6fdNUw6kpmpBQ68Q.js"></script> -->
    <link rel="icon" type="image/png" href="{{asset('assets')}}/img/favicon.png" />



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

    <!-- Pageloader -->
    <div class="pageloader"></div>
    <div class="infraloader is-active"></div>

    <div class="signup-wrapper">
        <div class="fake-nav">
            <a href="index.html" class="logo">
                <img src="{{asset('assets')}}/img/vector/logo/friendkit-bold.svg" width="112" height="28" alt="" />
            </a>
        </div>



        <form method="POST" action="{{route('verify_otp')}}" enctype="multipart/form-data" id="verify_otp">
            @csrf
            <div class="outer-panel">
                <div class="outer-panel-inner">
                    <div class="process-title">
                        <h2 id="step-title-1" class="step-title is-active">
                            Otp Verification.
                        </h2>

                    </div>

                    <div id="signup-panel-1" class="process-panel-wrap is-active">
                        <div class="columns mt-4">
                            <div class="column is-4">
                                <div class="account-type">
                                    <div class="type-image">
                                        <img class="type-illustration" src="{{asset('assets')}}/img/illustrations/signup/type-1.svg" alt="" />
                                        <img class="type-bg light-image" src="{{asset('assets')}}/img/illustrations/signup/type-1-bg.svg" alt="" />
                                        <img class="type-bg dark-image" src="{{asset('assets')}}/img/illustrations/signup/type-1-bg-dark.svg" alt="" />
                                    </div>
                                    <h3>Enter your OTP Here!</h3>
                                    <div class="field">
                                        <div class="control">
                                            <input type="text" class="input" placeholder="Enter your otp number" name="otp" />
                                        </div>
                                    </div>
                                    <button type="submit" class="button is-fullwidth process-button" data-step="step-dot-2">Verify OTP</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <form>


    </div>

    <!-- Concatenated js plugins and jQuery -->
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

    <!-- Landing page js -->

    <!-- Signup page js -->
    <script src="{{asset('assets')}}/js/signup.js"></script>

    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $("#verify_otp").validate({
                rules: {

                    otp: {
                        required: true,
                    },
                },
                messages: {

                    otp: {
                        required: "Otp is required",
                    }

                }
            });
        });
    </script>

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


<!-- Mirrored from friendkit.cssninja.io/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Oct 2023 10:45:23 GMT -->

</html>