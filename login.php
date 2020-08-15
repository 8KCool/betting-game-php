<!DOCTYPE html>
<html>

<head>
    <script type="text/javascript">
        window.history.forward();
    </script>
    <title>IIIT Ongole</title>
    <!--BootStrap assets hosted from CDN(Content Delivery Network for faster loading of pages) -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="resources/bootstrap.min.css">

    <!--    Custom StyleSheet-->
    <link rel="stylesheet" type="text/css" href="resources/login.css">
</head>

<body class="text-center">
    <form class="form-signin">
        <img class="mb-4" src="resources/lb.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Login here!</h1>

        <input type="number" id="PhoneNo" class="form-control" placeholder="Mobile Number" required="">
        <input type="password" id="password" class="form-control" placeholder="Password" required="">

        <button class="btn btn-lg btn-success btn-block" type="submit">Login now</button>
        <br>
        <a ui-sref="forgetpassword" href="#/forget-password" class="pull-right">Forgot password?</a>
        <hr>
        <div class="pull-right">
            Not an user? <a ui-sref="register" href="register.php">Register</a>
        </div>
        <p class="mt-5 mb-3 text-muted">© Ludo Legion Team</p>
    </form>
    
</body>

</html>