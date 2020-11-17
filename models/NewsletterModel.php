<?php

class NewsletterModel extends BaseModel
{
    public static function create ($email, $fullName)
    {

        BaseModel::load();

        $stmt = BaseModel::$pdo->prepare("INSERT INTO newsletters (email,fullName) VALUES (:email,:fullName)");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':fullName', $fullName);

        return $stmt->execute();
        //$result = $stmt->fetchAll();
        //return $result;
    }
    // kunnen jullie ook hier checken of dit goed is?


}