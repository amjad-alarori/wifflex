<!doctype html>
<html lang="en">
<head>
    <title>Inloggen</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="views/css/universal.css" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="jumbotron">
    <div class="container">
        <h1 class="display-2">WFFLIX</h1>
        <p class="lead">Makkelijk, snel, programmeren</p>
    </div>
</div>

<?php

require 'sidebar.view.php'
?>

<div class="main">
    <div class="container">

        <div id="login" >

            <div class="container">

                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            <form id="login-form" class="form" action="/doLogin" method="post">
                                <?php if(isset($_GET['error'])) { ?>
                                    <div style="border: 1px solid red; background-color: pink;"><b>ERROR: </b><?php echo $_GET['error'];?></div>
                                <?php } ?>
                                <h3 class="text-center" id="loginText">Login</h3>
                                <div class="form-group">

                                    <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
                                </div>
                                <div class="form-group">

                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password"required>
                                </div>
                                <div class="form-group">
                                  <input type="submit" name="submit" class="btn btn-primary col text-center" id="loginButton" value="login" >
                                    <br>
                                </div><div id="register-link" class="text-center">
                                    <p id="registerText" >Nog geen account? klik dan <a href="/register">hier</a></p>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>




</body>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>