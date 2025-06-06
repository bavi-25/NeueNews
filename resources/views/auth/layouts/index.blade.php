<!DOCTYPE html>
<html lang="en" class="h-100">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>NeueuNews</title>
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon.png">
        <link href="/assets/css/style.css" rel="stylesheet">
        <style>
            body {
                background-image: url("/assets/images/bg-auth.jpg");
                background-size: cover;
                background-position: center center;
                background-attachment: fixed;
            }

            .auth-form {
                background-color: rgba(0, 0, 0, 0.8);
                border-radius: 15px;
                padding: 30px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
                backdrop-filter: blur(10px);
                border: 1px solid rgba(255, 255, 255, 0.1);
            }

            /* Responsive card sizing */
            .auth-container {
                max-width: 450px;
                width: 100%;
                margin: 0 auto;
                padding: 15px;
            }

            @media (max-width: 576px) {
                .auth-form {
                    padding: 20px;
                    margin: 10px;
                }

                .auth-container {
                    max-width: 100%;
                    padding: 10px;
                }
            }

            @media (min-width: 992px) {
                .auth-container {
                    max-width: 400px;
                }
            }

            .form-control {
                background-color: rgba(255, 255, 255, 0.1);
                border: 1px solid rgba(255, 255, 255, 0.2);
                color: white;
            }

            .form-control:focus {
                background-color: rgba(255, 255, 255, 0.15);
                border-color: #007bff;
                box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
                color: white;
            }

            .form-control::placeholder {
                color: rgba(255, 255, 255, 0.7);
            }

            label {
                color: rgba(255, 255, 255, 0.9);
                font-weight: 500;
            }

            .form-check-label {
                color: rgba(255, 255, 255, 0.8);
            }

            a {
                color: #007bff;
                text-decoration: none;
            }

            a:hover {
                color: #0056b3;
                text-decoration: underline;
            }
        </style>
    </head>

    <body class="h-100">
        <div class="authincation h-100">
            <div class="container-fluid h-100">
                <div class="row justify-content-center h-100 align-items-center">
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- Required vendors -->
        <script src="/assets/vendor/global/global.min.js"></script>
        <script src="/assets/js/quixnav-init.js"></script>
        <script src="/assets/js/custom.min.js"></script>
    </body>

</html>