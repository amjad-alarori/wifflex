<?php


class CommentsController
{

    public function doComment()
    {

        require 'models/CommentsModel.php';

        if (isset($_POST['comment']) && strlen($_POST['comment'])) {


            $comments = new Commentsmodel();
            $comments->setComment($_POST['comment']);
            $comments->setVideoID($_POST['videoid']);
            $comments->setUserID($_SESSION['id']);
            $comments->saveToDatabase();

            // de hele pagina herlaad,
            $tempid = $_POST['videoid'];
            header("location: /playvideo?videoId=" . $tempid);
        }
    }


}

