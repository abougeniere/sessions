<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Bootstrap 101 Template</title>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>           

        <!-- Bootstrap
        <link href="css/bootstrap.min.css" rel="stylesheet">
        -->
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Latest compiled and minified CSS
        <link rel="stylesheet" href="css/bootstrap.min.css">
        -->
        <link rel="stylesheet" href="css/bootstrap.css">

        <!-- Optional theme
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        -->
        <link rel="stylesheet" href="css/bootstrap-theme.css">

        <!-- Latest compiled and minified JavaScript
        <script src="js/bootstrap.min.js"></script>
        -->
        <script src="js/bootstrap.js"></script>

        <!-- bootbox code -->
        <script src="js/bootbox.min.js"></script>

    </head>

    <body>

        <!-- test base -->
        <br><br>
        <div class="container">
            <div class="row clearfix">
                <div class="col-md-2 column">
                </div>
                <div class="col-md-8 column">
                    <div class="row clearfix">
                        <div class="col-md-12 column">
                            <div class="jumbotron well">
                                <h1>
                                    -
                                </h1>
                                <p>
                                    texte ..
                                </p>
                                <p>
                                    <button onclick="bootbox.alert('Hello world!');">Click me</button>
                                    <a class="btn btn-primary btn-large" href="#">Learn more</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <form role="form">
                        <div class="form-group">
                            <label for="inputEmail">Email address</label><input class="form-control" id="InputEmail" type="email" placeholder="Type your email" required/>
                        </div>

                        <div class="form-group">
                            <label for="InputPassword">Password</label><input class="form-control" id="InputPassword" type="password" placeholder="Type your password" required/>
                        </div>

                        <?php
                        if ($_SESSION["LoginCount"] > MAX_LOGIN_COUNT_BEFORE_CAPTCHA)
                            {
                            ?>
                            <div class="form-group">
                                <label for="captcha">Captcha</label>
                                <img src="includes/coolcaptcha/captcha.php"  alt="140x140" id="captcha" class="img-thumbnail img-responsive center-block" />
                            </div>
                            <?php
                            }
                        ?>
                        <div class="form-group">
                            <input class="form-control" id="saisieCaptcha" type="text" placeholder="Type the captcha text" required/>
                        </div>


                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
                <div class="col-md-2 column">
                </div>
            </div>
        </div>
        <!-- test bootstrap -->

        <?php
        // Login count
        if (!isset($_SESSION["LoginCount"]))
            {
            $_SESSION["LoginCount"] = 1;
            }
        else
            {
            $_SESSION["LoginCount"]+=1;
            }


        print_r($_SESSION);
        ?>
    </body>
</html>

