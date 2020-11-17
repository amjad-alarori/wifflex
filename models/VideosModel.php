<?php

class VideosModel extends BaseModel
{


    public static function getVideosByCategory($categoryId)
    {
        BaseModel::load();


        if (isset($categoryId)) {
            $stmt = BaseModel::$pdo->prepare('SELECT * FROM videos WHERE catid = :categoryId');
            $stmt->bindParam(':categoryId', $categoryId);
        } else {
            $stmt = BaseModel::$pdo->prepare('SELECT * FROM videos');
        }

        $stmt->execute();
        return $stmt->fetchAll();
    }


    public static function getVideosByVideoId($videoId)
    {
        BaseModel::load();


        if (isset($videoId)) {
            $stmt = BaseModel::$pdo->prepare('SELECT * FROM videos WHERE id = :videoId');
            $stmt->bindParam(':videoId', $videoId);
        } else {
            $stmt = BaseModel::$pdo->prepare('SELECT * FROM videos');
        }

        $stmt->execute();
        return $stmt->fetchAll();
    }


    private int $id,$catid;
    private string $videoname, $description, $path, $imagepath;

    Public function getVideoId(): int
    {

        return $this->id;
    }

    public function setVideoId( int $id): void
    {
        $this->id=$id;

    }

    public function getCatId(): int
    {

        return $this->catid;

    }

    public function setCatId( int $catid): void
    {
        $this->catid=$catid;

    }

    public function getVideoname(): string
    {

        return $this->videoname;

    }

    public function setVideoname( string $videoname): void
    {
        $this->videoname=$videoname;

    }

    public function getDescription(): string
    {
        return $this->description;

    }

    public function setDescription(string $description): void
    {

        $this->description=$description;

    }

    public function getPath(): string
    {
        return $this->path;

    }

    public function setPath( string $path): void
    {
        $this->path=$path;
    }

    public function getImagepath(): string
    {
        return $this->imagepath;

    }

    public function setImagepath( string $imagepath): void
    {
        $this->imagepath=$imagepath;

    }





    public function saveVideo(){



        Basemodel::load();
        $stmt = BaseModel::$pdo->prepare('INSERT INTO videos
                                (catid, videoname, description, path,
                                 imagepath) VALUE (
                                 :catid, :videoname, :description, :path, :imagepath)');

        $stmt->bindParam(':catid', $this->catid);
        $stmt->bindParam(':videoname', $this->videoname);
        $stmt->bindParam(':description', $this->description);
        $stmt->bindParam(':path', $this->path);
        $stmt->bindParam(':imagepath', $this->imagepath);
        $stmt->execute();

    }

    public static function deleteVideo($videoId){

        Basemodel::load();
        $stmt= BaseModel::$pdo->prepare('DELETE FROM videos WHERE id = :videoId');
        $stmt->bindParam(':videoId', $videoId);
        $stmt->execute();
    }

    public static function searchVideo()
    {
        BaseModel::load();
        $searchKey = "%" . $_GET['searchKey'] . "%";
        $query = 'SELECT videos.id, videos.videoname, videos.description, videos.path, videos.imagepath, videos.catid , category.title FROM videos LEFT JOIN category ON videos.catid = category.id WHERE category.title LIKE :searchKey OR videos.videoname LIKE :searchKey';

        $stmt = BaseModel::$pdo->prepare($query);
        $stmt->bindParam(':searchKey', $searchKey,PDO::PARAM_STR);
        $stmt->execute();

        if ($stmt->rowCount()>0):
            return $stmt->fetchAll();
        else:
            return false;
        endif;
    }
}