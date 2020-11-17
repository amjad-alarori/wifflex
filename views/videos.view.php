<!doctype html>
<html lang="en">
<head>
    <title>Videos</title>
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
require 'sidebar.view.php';

?>

<div class="main">
    <div class="container">
            <div class="row">

           <?php foreach ($videos as $video):
                ?>
                <div class="col-md-4 d-flex">
                    <div class="card text-white bg-dark" style="width: 20rem;display:inline-block;">
                        <img class="card-img-top" src="<?php echo $video['imagepath'];?>" alt="card image cap">
                        <a class="card-body stretched-link" href="playvideo?videoId=<?php echo $video['id'];?>">
                            <h4 class="title"> <?php echo $video['videoname'];?></h4>
                            <p class="card-text" id="videoDescription"> <?php echo $video['description'];?></p>
                        </a>
                    </div>
                </div>


<?php endforeach; ?>

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
