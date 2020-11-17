<!doctype html>
<html lang="en">
<head>

    <title>Video player</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="views/css/play_video.css" type="text/css">
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
    <div class="container" >
        <div>
            <video width="540" height="360" controls>
                <source src="<?php
                echo $this->video[0]['path'];?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>

            <?php if (isset($_SESSION['admin']) && $_SESSION['admin']): ?>
            <div class="deleteVideo">
                <form action="/doDeleteVideo" method="post" id="deleteVideo">
                    <input name="videoId" hidden value="<?php echo $this->video[0]['id']; ?>">
                    <button type="submit" class="btn btn-primary">Verwijder video</button>
                </form>
            <?php endif; ?>


            <?php
            $UserId = $_SESSION['id'];
            $VideoId = $this->video[0]['id'];
            ?>

            <a href="#" onclick="javascript:fetch('Video/likes/increment?user=<?php echo $UserId?>&video=<?php echo $VideoId?>',{method: 'POST', headers: {}}).then(response=> response.json().then(body => this.innerHTML = 'like <br>' + body));" name="like" class="btn btn-success text-white"> like <br>
                <?= $this->video['number_of_likes'];  ?>
            </a>
            <a href="#" onclick="javascript:fetch('Video/likes/decrement?user=<?php echo $UserId?>&video=<?php echo $VideoId?>',{method: 'POST', headers: {}}).then(response => response.json().then(body => this.innerHTML = 'dislike <br>' + body));" name="dislike" class="btn btn-danger text-white"> dislike <br>
                <?= $this->video['number_of_dislikes']; ?>
            </a>
        </div>
            <br>


        <div style="background-color: #ddd; padding: 10px; box-sizing: border-box; width: 540px">
        <form id="comment-form" class="form" action="/doComment" method="post" >


            <div class="form-group">
                <input type="text" name="comment" id="comment" class="form-control" placeholder="Typ je reactie" required>
            </div>
            <div class="form-group">

                 <input type="hidden" name="videoid" id="videoid" value="<?php echo $this->video[0]['id'];?>">
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary col text-center" id="commentButton" value="reageren" >
                <br>
            </div>
        </form>
        </div>
        <br>

        <?php
        if (isset($this->comments))
        foreach($this->comments as $comment):
        ?>


            <div class="card text-white bg-secondary mb-3" id="commentCard">
                <div class="card-header" id="commentCardHeader"> <?php echo $comment['username']?> </div>
                <div class="card-body" id="commentCardBody">

                    <p class="card-text"><?php echo $comment['comment']?></p>
                </div>
            </div>

        <?php
        endforeach;
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
