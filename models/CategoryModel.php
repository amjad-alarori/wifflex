<?php

class CategoryModel extends BaseModel
{


    public static function getCategory()
    {
        BaseModel::load();

        $stmt = BaseModel::$pdo->prepare('SELECT * FROM category');
        $stmt->execute();
        return $stmt->fetchAll();
    }

}