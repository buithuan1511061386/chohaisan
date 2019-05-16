<!DOCTYPE html>
<html>

<head>
    <title>Lock Screen | Josh Admin Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- global level css -->
    <link href="{{asset('public/backend/css/bootstrap.min.css')}}" rel="stylesheet" />
    <!-- end of global level css -->
    <!-- page level css -->
    <link rel="stylesheet" href="{{asset('public/backend/vendors/fort.js/css/fort.css')}}" />
    <link href="{{asset('public/backend/css/pages/lockscreen.css')}}" rel="stylesheet" />
    <!-- end of page level css -->
</head>

<body>
    <div class="top">
        <div class="colors"></div>
    </div>
    <div class="container">
        <div class="login-container">
            <div id="output"></div>
            <div class="avatar"></div>
            <div class="form-box">
                <form method="POST" name="screen">
                    <div class="form">
                        <p class="form-control-static">ADMIN</p>
                        <input type="password" name="user" class="form-control" placeholder="Password">
                        <button class="btn btn-info btn-block login" id="index" type="submit">GO</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- global js -->
    <script src="{{asset('public/backend/js/app.js')}}" type="text/javascript"></script>
    <!-- end of global js -->
    <!-- begining of page level js-->
    <script src="{{asset('public/backend/vendors/fort.js/js/fort.js')}}"></script>
    <script src="{{asset('public/backend/js/pages/lockscreen.js')}}"></script>
    <!-- end of page level js-->
</body>

</html>
