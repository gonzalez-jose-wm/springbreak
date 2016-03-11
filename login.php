<?php
/**
 * Created by PhpStorm.
 * User: session1
 * Date: 3/11/16
 * Time: 2:36 PM
 */?>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>
    <link type="text/css" rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</head>

<body>
<div class="container">
    <div class="row vertical-offset-100">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row-fluid user-row">
                        <img src="http://s11.postimg.org/7kzgji28v/logo_sm_2_mr_1.png" class="img-responsive" alt="Conxole Admin"/>
                    </div>
                </div>
                <div class="panel-body">
                    <form accept-charset="UTF-8" role="form" class="form-signin">
                        <fieldset>
                            <label class="panel-login">
                                <div class="login_result"></div>
                            </label>
                            <input class="form-control" placeholder="Username" id="username" type="text">
                            <input class="form-control" placeholder="Password" id="password" type="password">
                            <br></br>
                            <input class="btn btn-lg btn-success btn-block" type="submit" id="login" value="Login »">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

