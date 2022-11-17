<!DOCTYPE html>
<html lang="en" class="h-100">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Some description for the page" />
        @yield('title')
    <link href="public/css/style.css" rel="stylesheet">


    <style>
        @media (min-width: 992px) {
            .container {
                max-width: 100%;
            }
        }

        @media (min-width: 992px) {
            .container {
                max-width: 100%;
            }
        }
    </style>
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    
                                    @yield('content')
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="public/vendor/global/global.min.js" type="text/javascript"></script>
    <script src="public/vendor/bootstrap-select/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="public/js/custom.min.js" type="text/javascript"></script>
    <script src="public/js/deznav-init.js" type="text/javascript"></script>

</body>

</html>