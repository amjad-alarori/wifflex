<?php

class VideosController
{

    public function getVideoData()
    {

        require 'models/VideosModel.php';
        require 'models/VideosLikesModel.php';

        $videos = VideosModel::getVideosByCategory(isset($_GET['categoryId']) ? $_GET['categoryId'] : null);
        for($i=0; $i < count($videos); $i++) {
            $videos[$i]['number_of_likes'] = VideosLikesModel::getAllLikes($videos[$i]['id']);
            $videos[$i]['number_of_dislikes'] = VideosLikesModel::getAllDislikes($videos[$i]['id']);
        }

        require 'views/videos.view.php';
    }

    public function getVideoId()
    {



        $this->video = VideosModel::getVideosByVideoId(isset($_GET['videoId']) ? $_GET['videoId'] : null);
        $this->video['number_of_likes'] = VideosLikesModel::getAllLikes($this->video[0]['id']);
        $this->video['number_of_dislikes'] = VideosLikesModel::getAllDislikes($this->video[0]['id']);
        $this->comments = CommentsModel::getComments($this->video[0]['id']);
        require 'views/play_video.view.php';

    }


    public function upload()
    {

        require 'views/upload.view.php';
    }

    public function uploadVideo()
    {

        $videoname = $_POST['videoname'];
        $description = $_POST['description'];
        $catid = $_POST['catid'];
        $imageFile = $_FILES['imagepath']['tmp_name'];
        $videoFile = $_FILES['path']['tmp_name'];

        $imageFileName = $_FILES['imagepath']['name'];
        if (file_exists('.\\asset\\' . $imageFileName)):
            $fileCount = 1;
            while (file_exists('.\\asset\\' . $fileCount . $imageFileName)) {
                $fileCount++;
            }
            $imageFileName = $fileCount . $imageFileName;
        endif;

        $videoFileName = $_FILES['path']['name'];
        if (file_exists('.\\asset\\' . $videoFileName)):
            $fileCount = 1;
            while (file_exists('.\\asset\\' . $fileCount . $videoFileName)) {
                $fileCount++;
            }
            $videoFileName = $fileCount . $videoFileName;
        endif;

        move_uploaded_file($imageFile, '.\\asset\\' . $imageFileName);
        move_uploaded_file($videoFile, '.\\asset\\' . $videoFileName);

        $video = new VideosModel();
        $video->setVideoname($videoname);
        $video->setDescription($description);
        $video->setCatId($catid);
        $video->setImagepath('.\\asset\\' . $imageFileName);
        $video->setPath('.\\asset\\' . $videoFileName);

        $video->saveVideo();

        header('Location: /upload?status=oke');


    }

    public function doDeleteVideo(){

        if (isset($_POST['videoId'])) {
            VideosModel::deleteVideo($_POST['videoId']);
            header('location: /categorie');
        }

    }


    public function searchVideo()
    {
        if (isset($_GET['searchKey'])) {
            $videos = VideosModel::searchVideo();
        }
        require 'views/searchVideos.view.php';
    }



}
