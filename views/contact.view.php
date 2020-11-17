<!doctype html>
<html lang="en">
<head>
    <title>Contact opnemen</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="views/css/contact_page.css" type="text/css">
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
        <form class="form" method="post" action="/sendcontact">
            <div class="form-group">
                <?php if (isset($_GET['err'])): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $_GET['err'] ?>
                    </div>
                <?php elseif (isset($_GET['status'])): ?>
                    <div class="alert alert-success" role="alert">
                        Uw mail verstuurd naar WFFlix.
                    </div>
                <?php endif; ?>
                <h5 class="card-title"> Contactformulier</h5>
                <p class="card-text"> Heb je vragen of andere opmerkingen? Neem dan via onderstaand formulier contact
                    met ons op!</p>

                <label for="fname">First Name</label>
                <input type="text" class="form-control" id="fname" name="firstname" placeholder="Your name.." required>
                <br>

                <label for="lname">Last Name</label>
                <input type="text" class="form-control" id="lname" name="lastname" placeholder="Your last name.."
                       required>
                <br>

                <label for="subject">Subject</label>
                <textarea id="subject" class="form-control" name="subject" placeholder="Write something.."
                          style="min-height:200px" required></textarea>
                <br/>
                <input type="submit" id="contactSubmitButton" class="btn btn-primary" value="Submit">
            </div>
        </form>
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
