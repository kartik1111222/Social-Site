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
        .error {
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
        <div class="fake-nav">
            <a href="index.html" class="logo">
                <img src="{{asset('assets')}}/img/vector/logo/friendkit-bold.svg" width="112" height="28" alt="" />
            </a>
        </div>

        <div class="process-bar-wrap">
            <div class="process-bar">
                <div class="progress-wrap">
                    <div class="track"></div>
                    <div class="bar"></div>
                    <div id="step-dot-1" class="dot is-first is-active is-current" data-step="0">
                        <i data-feather="smile"></i>
                    </div>
                    <div id="step-dot-2" class="dot is-second" data-step="25">
                        <i data-feather="user"></i>
                    </div>
                    <div id="step-dot-3" class="dot is-third" data-step="50">
                        <i data-feather="image"></i>
                    </div>
                    <div id="step-dot-4" class="dot is-fourth" data-step="75">
                        <i data-feather="lock"></i>
                    </div>
                    <div id="step-dot-5" class="dot is-fifth" data-step="100">
                        <i data-feather="flag"></i>
                    </div>
                </div>
            </div>
        </div>

        <form method="POST" action="{{route('add_registration')}}" enctype="multipart/form-data" id="step_1">
            @csrf
            <div class="outer-panel">
                <div class="outer-panel-inner">
                    <div class="process-title">
                        <h2 id="step-title-1" class="step-title is-active">
                            Welcome, select an account type.
                        </h2>
                        <h2 id="step-title-2" class="step-title">Tell us more about you.</h2>
                        <h2 id="step-title-3" class="step-title">Upload a profile picture.</h2>
                        <h2 id="step-title-4" class="step-title">Secure your account.</h2>
                        <h2 id="step-title-5" class="step-title">You're all set. Ready?</h2>
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
                                    <h3>Company</h3>
                                    <p>
                                        Create a company account to be able to do some awesome things.
                                    </p>
                                    <a class="button is-fullwidth process-button" data-step="step-dot-2">
                                        Continue
                                    </a>
                                </div>
                            </div>
                            <div class="column is-4">
                                <div class="account-type">
                                    <div class="type-image">
                                        <img class="type-illustration" src="{{asset('assets')}}/img/illustrations/signup/type-2.svg" alt="" />
                                        <img class="type-bg light-image" src="{{asset('assets')}}/img/illustrations/signup/type-2-bg.svg" alt="" />
                                        <img class="type-bg dark-image" src="{{asset('assets')}}/img/illustrations/signup/type-2-bg-dark.svg" alt="" />
                                    </div>
                                    <h3>Public Person</h3>
                                    <p>Create a public account to be able to do some awesome things.</p>
                                    <a class="button is-fullwidth process-button" data-step="step-dot-2">
                                        Continue
                                    </a>
                                </div>
                            </div>
                            <div class="column is-4">
                                <div class="account-type">
                                    <div class="type-image">
                                        <img class="type-illustration" src="{{asset('assets')}}/img/illustrations/signup/type-3.svg" alt="" />
                                        <img class="type-bg light-image" src="{{asset('assets')}}/img/illustrations/signup/type-3-bg.svg" alt="" />
                                        <img class="type-bg dark-image" src="{{asset('assets')}}/img/illustrations/signup/type-3-bg-dark.svg" alt="" />
                                    </div>

                                    <h3>Buisness</h3>
                                    <p>
                                        Create a personal account to be able to do some awesome things.
                                    </p>
                                    <a class="button is-fullwidth process-button" data-step="step-dot-2">
                                        Continue
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <form method="POST" action="{{route('add_registration')}}" enctype="multipart/form-data" id="step_1">
            @csrf -->
                    <div id="signup-panel-2" class="process-panel-wrap is-narrow">
                        <div class="form-panel">
                            <div class="field">
                                <label>First Name</label>
                                <div class="control">
                                    <input type="text" class="input" placeholder="Enter your first name" name="firstname" />
                                </div>
                            </div>
                            <div class="field">
                                <label>Last Name</label>
                                <div class="control">
                                    <input type="text" class="input" placeholder="Enter your last name" name="lastname" />
                                </div>
                            </div>
                            <div class="field">
                                <label>Email</label>
                                <div class="control">
                                    <input type="text" class="input" placeholder="Enter your email address" name="email" />
                                </div>
                            </div>
                        </div>

                        <div class="buttons">
                            <a class="button process-button" data-step="step-dot-1">Back</a>
                            <a class="button process-button is-next" data-step="step-dot-3">Next</a>
                            <!-- <button type="submit" class="button process-button is-next" data-step="step-dot-3">Next</button> -->
                        </div>
                    </div>
        <!-- </form> -->
        <div id="signup-panel-3" class="process-panel-wrap is-narrow">
            <div class="form-panel">
                <div class="photo-upload">
                    <div class="preview">
                        <!-- <a class="upload-button"> -->
                        <!-- <i data-feather="plus"></i> -->
                        <!-- </a> -->
                        <img id="upload-preview" src="https://via.placeholder.com/150x150" src="{{asset('assets')}}/img/avatars/avatar-w" alt="" />
                        <form id="profile-pic-dz" class="dropzone is-hidden" action="https://friendkit.cssninja.io/">
                        </form>
                    </div>
                    <div class="limitation">
                        <input type="file" class="form-control" name="profile"><br>
                        <small>Only images with a size lower than 3MB are allowed.</small>
                    </div>
                </div>
            </div>

            <div class="buttons">
                <a class="button process-button" data-step="step-dot-2">Back</a>
                <a class="button process-button is-next" data-step="step-dot-4">Next</a>
                <!-- <button type="submit" class="button process-button is-next" data-step="step-dot-4">Next</button> -->
            </div>
        </div>

        <div id="signup-panel-4" class="process-panel-wrap is-narrow">
            <div class="form-panel">
                <div class="field">
                    <label>Password</label>
                    <div class="control">
                        <input type="password" class="input" placeholder="Choose a password" name="password" />
                    </div>
                </div>
                <div class="field">
                    <label>Address</label>
                    <div class="control">
                        <textarea type="text" class="input" placeholder="Enter your Addresss" name="address"></textarea>
                        <!-- <input  /> -->
                    </div>
                </div>
                <div class="field">
                    <label>Phone Number</label>
                    <div class="control">
                        <input type="text" class="input" placeholder="Enter your phone number" name="phone_number" />
                    </div>
                </div>
            </div>

            <div class="buttons">
                <a class="button process-button" data-step="step-dot-3">Back</a>
                <a class="button process-button is-next" data-step="step-dot-5">Next</a>
                <!-- <button type="submit" class="button process-button is-next" data-step="step-dot-5">Next</button> -->
            </div>
        </div>

        <div id="signup-panel-5" class="process-panel-wrap is-narrow">
            <div class="form-panel">
                <img class="success-image" src="{{asset('assets')}}/img/illustrations/signup/mailbox.svg" alt="" />
                <div class="success-text">
                    <h3>Congratz, you successfully created your account.</h3>
                    <p>
                        We just sent you a confirmation email. PLease confirm your account
                        within 24 hours.
                    </p>
                    <!-- <a id="signup-finish" class="button is-fullwidth">Let Me In</a> -->
                    <button type="submit" class="button is-fullwidth">Let Me In</button>
                </div>
            </div>
        </div>

    </div>
    </div>
    <form>

        <!--Edit Credit card Modal-->
        <div id="crop-modal" class="modal is-small crop-modal is-animated">
            <div class="modal-background"></div>
            <div class="modal-content">
                <div class="modal-card">
                    <header class="modal-card-head">
                        <h3>Crop your picture</h3>
                        <div class="close-wrap">
                            <button class="close-modal" aria-label="close">
                                <i data-feather="x"></i>
                            </button>
                        </div>
                    </header>
                    <div class="modal-card-body">
                        <div id="cropper-wrapper" class="cropper-wrapper"></div>
                    </div>
                </div>
            </div>
        </div>

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



        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            $(document).ready(function() {
                $("#step_1").validate({
                    rules: {

                        firstname: {
                            required: true,
                        },
                        lastname: {
                            required: true,
                        },
                        email: {
                            required: true,
                        },
                    },
                    messages: {

                        firstname: {
                            required: "firstname is required",
                        },
                        lastname: {
                            required: "lastname is required",
                        },
                        email: {
                            required: "email is required",
                        }

                    }
                });


                $("#step_2").validate({
                    rules: {

                        profile: {
                            required: true,
                        }
                    },
                    messages: {

                        profile: {
                            required: "Profile is required",
                        }

                    }
                });

                $("#step_3").validate({
                    rules: {

                        password: {
                            required: true,
                        },

                        phone_number: {
                            required: true,
                        }
                    },
                    messages: {

                        password: {
                            required: "password is required",
                        },
                        phone_number: {
                            required: "Phone No. is required",
                        },
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
</body>


<!-- Mirrored from friendkit.cssninja.io/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Oct 2023 10:45:23 GMT -->

</html>