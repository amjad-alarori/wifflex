<!doctype html>
<html lang="en">
<head>
    <title>Profiel</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="views/css/profile_page.css" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="views/jsscripts.js"></script>

</head>
<body>
<div class="jumbotron">
    <div class="container">
        <h1 class="display-2">WFFLIX</h1>
        <p class="lead">Makkelijk, snel, programmeren</p>
    </div>
</div>
<?php
require 'sidebar.view.php';


?>

<div class="main">
    <h1>Profiel</h1>
    <div class="container">
        <div class="card bg-secondary text-white">
            <h5 class="card-header">Username</h5>
            <div class="card-body">
                <p class="card-text text-white">Als u uw username "<?php echo isset($_SESSION['user'])?$_SESSION['user']:"" ?>" wilt wijzigen,
                    klik dan hieronder op de 'Wijzigen' knop.</p>
                <a href="/nameChange" class="btn btn-primary">Wijzigen</a>
            </div>
        </div>
        <br>
        <div class="card bg-secondary text-white">
            <h5 class="card-header">Password</h5>
            <div class="card-body">
                <p class="card-text text-white">Als u uw wachtwoord wilt wijzigen, klik dan hieronder op de 'Wijzigen' knop.</p>
                <a href="/passChange" class="btn btn-primary">Wijzigen</a>
            </div>
        </div>
        <br>
        <div class="card bg-secondary text-white">
            <h5 class="card-header">Logout</h5>
            <div class="card-body">
                <form action="/doLogout" method="post">
                <p class="card-text text-white">Om uit te loggen kunt u hieronder op de 'Logout' knop klikken.</p>
                    <button type="submit" class="btn btn-primary">Logout</button>
                </form>
            </div>
        </div>
        <br>
        <div class="card bg-secondary text-white">
            <h5 class="card-header">Account verwijderen</h5>
            <div class="card-body">
                <p class="card-text text-white">Om uw account te verwijderen kunt u hieronder op de 'Verwijder account' knop drukken.</p>
                <form action="/doDelete" method="post" onsubmit="return confirmation()"><button class="btn btn-primary" type="submit">Acount verwijderen</button></form>
            </div>
        </div>
    </div>
</div>


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