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
        <link href="/assets/css/auth.css" rel="stylesheet">
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