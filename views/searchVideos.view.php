<!doctype html>
<html lang="en">
<head>
    <title>Videos zoeken</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="views/css/search_page.css" type="text/css">
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



        <div class="card bg-secondary text-white">
            <h5 class="card-header">Zoek binnen WFFlix</h5>
            <div class="card-body">
                <p class="card-text text-white">Ben je op zoek naar een specifieke video? Typ dan hieronder je zoekterm!</p>
                <br>
                <form class="form-inline" method="get">
                    <div class="searchCard">
                        <div class="form-group">
                            <input class="form-control" type="text" name="searchKey">
                            <button class="btn btn-primary form-control" type="submit">Zoeken</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <div class="horizontallijn"></div>

        <?php
        if (isset($videos) && $videos !== false):
            foreach ($videos as $video):
                ?>


                <div class="card text-white bg-dark" style="width: 20rem;display:inline-block;">
                    <div class="img-fluid">
                        <video width="100%">
                            <source src="<?php echo $video['path']; ?>" type="video/mp4">
                        </video>
                        <a class="card-body stretched-link" href="playvideo?videoId=<?php echo $video['id']; ?>">
                            <h4 class="PHP"> <?php echo $video['videoname']; ?></h4>
                            <p class="card-text"></p>
                        </a>
                    </div>
                </div>

            <?php
            endforeach;
        endif;
        ?>

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
