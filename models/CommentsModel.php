<?php

class CommentsModel extends BaseModel
{


    public static function getComments($id) //gebruikt video id
    {

        BaseModel::load();

        $stmt = BaseModel::$pdo->prepare('SELECT * FROM comments INNER JOIN users ON comments.userid = users.id WHERE videoid = :id ORDER BY comments.id DESC;');
        $stmt->bindParam(':id', $id);

        $stmt->execute();

        $result = $stmt->fetchAll();
        return $result;
    }

    private int $videoid, $userid;
    private string $comment;

    public function setComment(string $comment): void
    {
        $this->comment = $comment;
    }

    public function setVideoid(int $videoid): void
    {
        $this->videoid = $videoid;
    }

    public function setuserid(int $user): void
    {
        $this->userid = $user;
    }

    public function saveToDatabase()
    {
        Basemodel::load();

        $stmt = BaseModel::$pdo->prepare('INSERT INTO comments
                                (comment, videoid, userid) VALUE (
                                :comment, :videoid, :userid)');

        $stmt->bindParam(':comment', $this->comment);
        $stmt->bindParam(':videoid', $this->videoid);
        $stmt->bindParam(':userid', $this->userid);
        $stmt->execute();

        if (!isset($this->id)):
            $this->id = BaseModel::$pdo->lastInsertId();
        endif;

    }
}
