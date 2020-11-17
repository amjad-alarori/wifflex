<?php




class VideosLikesModel extends BaseModel {

    public static function getAllLikes($videos_id = false, $users_id = false) {

        BaseModel::load();

        if ($users_id){
            $stmt = BaseModel::$pdo->prepare('SELECT videos_id, COUNT(idlike) AS result FROM likes WHERE islike = 1 AND videos_id = :videos_id AND users_id = :users_id GROUP BY videos_id');
            $stmt->bindParam(":videos_id", $videos_id, PDO::PARAM_INT);
            $stmt->bindParam(":users_id", $users_id, PDO::PARAM_INT);
            $stmt->execute();
            if($result = $stmt->fetch())
            {
                return $result['result'];
            }

            return 0;
        }
        else if ($videos_id){
            $stmt = BaseModel::$pdo->prepare('SELECT videos_id, COUNT(idlike) AS result FROM likes WHERE islike = 1 AND videos_id = :videos_id GROUP BY videos_id');
            $stmt->bindParam(":videos_id", $videos_id, PDO::PARAM_INT);
            $stmt->execute();
            if($result = $stmt->fetch())
            {
                return $result['result'];
            }

            return 0;

        }
        else {
            $stmt = BaseModel::$pdo->prepare('SELECT videos_id, COUNT(idlike) AS result FROM likes WHERE islike = 1 GROUP BY videos_id');
            $stmt->execute();
            if($result = $stmt->fetch())
            {
                return $result['result'];
            }

            return 0;
        }
    }




    public static function getAllDislikes($videos_id = false, $users_id = 0) {

        BaseModel::load();

        if($users_id)
        {
            $stmt = BaseModel::$pdo->prepare('SELECT videos_id, COUNT(idlike) AS result FROM likes WHERE dislike = 1 AND videos_id = :videos_id AND users_id = :users_id GROUP BY videos_id');
            $stmt->bindParam(":videos_id", $videos_id, PDO::PARAM_INT);
            $stmt->bindParam(":users_id", $users_id, PDO::PARAM_INT);
            $stmt->execute();
            if($result = $stmt->fetch())
            {
                return $result['result'];
            }

            return 0;
        }
        else if($videos_id)
        {
            $stmt = BaseModel::$pdo->prepare('SELECT videos_id, COUNT(idlike) AS result FROM likes WHERE dislike = 1 AND videos_id = :videos_id GROUP BY videos_id');
            $stmt->bindParam(":videos_id", $videos_id, PDO::PARAM_INT);
            $stmt->execute();
            if($result = $stmt->fetch())
            {
                return $result['result'];
            }

            return 0;
        }
        else {
            $stmt = BaseModel::$pdo->prepare('SELECT videos_id, COUNT(idlike) AS result FROM likes WHERE dislike = 1 GROUP BY videos_id');
            $stmt->execute();
            if($result = $stmt->fetch())
            {
                return $result['result'];
            }

            return 0;
        }


    }

//    public static function getLikesByVideo($videoId)
//    {
//        BaseModel::load();
//
//
//        if (isset($videoId)) {
//            $stmt = BaseModel::$pdo->prepare('SELECT * FROM likes WHERE idlike = :idlike');
//            $stmt->bindParam(':idlike', $videoId);
//        } else {
//            $stmt = BaseModel::$pdo->prepare('SELECT * FROM likes');
//        }
//
//        $stmt->execute();
//        return $stmt->fetchAll();
//    }



    public static function liksInsert($UserId, $VideoId){

        BaseModel::load();

        $like = 1;

        if(isset($UserId) && isset($VideoId) && VideosLikesModel::getAllLikes($VideoId, $UserId) <= 0 && VideosLikesModel::getAlldisLikes($VideoId, $UserId) <= 0){

            $stmt = BaseModel::$pdo->prepare('INSERT INTO likes (islike, dislike, videos_id, users_id) VALUE (:islike, :dislike, :videos_id, :users_id)');
            $stmt->bindParam(':islike', $like);
            $stmt->bindValue(':dislike', 0);
            $stmt->bindParam(':videos_id', $VideoId);
            $stmt->bindParam(':users_id', $UserId);
            $stmt->execute();
        }
    }



    public static function disliksInsert($UserId, $VideoId){

        BaseModel::load();

        $dislike = 1;

        if(isset($UserId) && isset($VideoId) && VideosLikesModel::getAllDisLikes($VideoId, $UserId) <= 0 && VideosLikesModel::getAllLikes($VideoId, $UserId) <= 0){

            $stmt = BaseModel::$pdo->prepare('INSERT INTO likes (islike, dislike, videos_id, users_id) VALUE (:islike, :dislike, :videos_id, :users_id)');
            $stmt->bindValue(':islike', 0);
            $stmt->bindParam(':dislike', $dislike);
            $stmt->bindParam(':videos_id', $VideoId);
            $stmt->bindParam(':users_id', $UserId);
            $stmt->execute();


        }
    }

}

;