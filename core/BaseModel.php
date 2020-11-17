<?php


class BaseModel {
    protected static PDO $pdo;

    public static function load()
    {
        if(isset(BaseModel::$pdo) === false) {
            try {
//                BaseModel::$pdo = new PDO("mysql:host=localhost;dbname=wfflix", "root", "root", [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
//                BaseModel::$pdo = new PDO("mysql:host=localhost;dbname=wfdomp", "root", "Opgezw0lle90", [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
                BaseModel::$pdo = new PDO("mysql:host=localhost;dbname=wfflix", "root", "Admin", [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
//                BaseModel::$pdo = new PDO("mysql:host=localhost;dbname=teamb3_wfflix", "teamb3", "teamb3", [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
            } catch (PDOException $e) {
                die('Connection failed: ' . $e->getMessage());
            }
        }
    }
}
/*class BaseModel{

    protected PDO $pdo;

    public function __construct(){
    try   {


        $this->pdo = new PDO( 'mysql:host=localhost;dbname=wfdomp', 'root', 'Opgezwolle90', [PDO::ATTR_DEFAULT_FETCH_MODE=> PDO::FETCH_ASSOC]);
    } Exce

    catch (vard_dump($e->getMessage()));
}*/


