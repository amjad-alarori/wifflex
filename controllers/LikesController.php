<?php


class LikesController
{


    public function increment(){

        $UserId = $_GET['user'];
        $VideoId = $_GET['video'];
        VideosLikesModel::liksInsert($UserId,$VideoId);
        echo json_encode(VideosLikesModel::getAllLikes($VideoId));
    }

    public function decrement(){
        $UserId = $_GET['user'];
        $VideoId = $_GET['video'];
        VideosLikesModel::disliksInsert($UserId,$VideoId);
        echo json_encode(VideosLikesModel::getAllDislikes($VideoId));
    }

}