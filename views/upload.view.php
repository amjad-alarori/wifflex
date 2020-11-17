<!doctype html>
<html lang="en">
<head>
    <title>Upload video</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="views/css/upload_page.css" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php

require 'sidebar.view.php';


?>
<div class="jumbotron">
    <div class="container">
        <h1 class="display-2">WFFLIX</h1>
        <p class="lead">Makkelijk, snel, programmeren</p>
    </div>
</div>

<div class="main">
    <div class="container">
        <div id="upload">
            <div class="container">


                <div id="upload-row" class="row justify-content-center align-items-center">
                    <?php if (isset($_GET['status'])):
                        ?>
                        <div class="alert alert-success" role="alert">
                            Bestand succesvol geüpload
                        </div>

                    <?php endif ?>
                </div>
                <br>
                <br>
                <br>

                <div id="upload-row" class="row justify-content-center align-items-center">
                    <div id="upload-column" class="col-md-6">


                        <div id="upload-box" class="col-md-12">

                            <form method="post" action="/uploadVideo" enctype="multipart/form-data">
                                <div class="form-group">

                                    <h3 class="text-center" id="uploadText">Video uploaden</h3>

                                    <div class="form-group">
                                        <input class="form-control" type="text" name="videoname" placeholder="Titel"
                                               id="Titel" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="description" placeholder="Beschrijving"
                                                  required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="cars" id="uploadLabelList">Onder welke categorie valt de
                                            video?</label>
                                        <select name="catid" id="category">
                                            <option value="1">PHP</option>
                                            <option value="2">C#</option>
                                            <option value="3">Java</option>
                                            <option value="4">Html</option>
                                            <option value="5">Javascript</option>
                                            <option value="6">CSS</option>
                                            <option value="7">Git</option>
                                            <option value="8">Ruby</option>
                                            <option value="9">Python</option>
                                            <option value="10">C++</option>
                                            <option value="11">SQL</option>
                                            <option value="12">C</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label id="uploadImage">Upload een afbeelding of screenshot van de video</label>
                                        <input type="file" class="form-control-file" name="imagepath" accept="image/*">
                                    </div>
                                    <div class="form-group">
                                        <label id="uploadVideo">Upload het videobestand</label>
                                        <input type="file" class="form-control-file" name="path" accept="video/mp4"
                                               required>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary col text-center" id="uploadButton">
                                            Uploaden
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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