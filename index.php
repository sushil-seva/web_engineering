<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="assets/bootstrap.min.js"></script>
    <link href="assets/bootstrap.min.css" rel="stylesheet" media="screen">
    <style type="text/css">
        body {
            background: url(assets/background.jpg);
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">

            <form class="form-signin" action="login.php" method="post">
                <h2 class="form-signin-heading" style="color: whitesmoke">Please sign in</h2>
                <label for="username" class="sr-only">Username</label>
                <input type="text" id="username" name="username" class="form-control" placeholder="Username"
                       required autofocus><br>
                <label for="inputPassword"  class="sr-only">Password</label>
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required><br>

                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button><br>

                <p>Create a <a href="registration.php">New account</a></p>
            </form>

        </div>
    </div>
</div>
<!-- /container -->


</div>
</body>
</html>