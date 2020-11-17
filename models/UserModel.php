<?php


class UserModel extends BaseModel
{


    //Functie om de username van een user uit de database te halen
    //prepare functie geeft de SQL query mee (bijvoorbeeld haal alle users met username gelijk
    public static function getUsersByUsername($username)
    {
        BaseModel::load();

        $stmt = BaseModel::$pdo->prepare('SELECT * FROM users WHERE username = :username');
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        if ($stmt->rowCount() > 0):
            return $stmt->fetch();
        else:
            return false;
        endif;
    }


    private int $id;
    private string $username, $password;
    private bool $admin;

    public function getId(): int
    {
        return $this->id;
    }


    public function setId(int $id): void
    {
        $this->id = $id;
    }


    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function getAdmin(): bool
    {
        return $this->admin;
    }

    public function setAdmin(bool $admin): void
    {
        $this->admin = $admin;
    }


    public function saveToDatabase()
    {
        Basemodel::load();

        $stmt = BaseModel::$pdo->prepare('INSERT INTO users
                                (username, password, admin) VALUE (
                                :username, :password, :admin)');

        $stmt->bindParam(':username', $this->username);
        $sha1 = sha1($this->password);
        $stmt->bindParam(':password', $sha1);
        $stmt->bindParam(':admin', $this->admin, PDO::PARAM_BOOL);
        $stmt->execute();

        if (!isset($this->id)):
            $this->id = BaseModel::$pdo->lastInsertId();
        endif;

    }

    public function updateUsername()
    {
        BaseModel::load();

        $stmt = BaseModel::$pdo->prepare('UPDATE users SET username=:username, updatedAt = now() WHERE id = :id; ');
        $stmt->bindParam(':username', $this->username);
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();
        //die(var_dump($stmt->errorInfo()));
    }

    public function updatePassword()
    {
        BaseModel::load();

        $stmt = BaseModel::$pdo->prepare('UPDATE users SET password=:password, updatedAt = now() WHERE id =:id; ');
        $stmt->bindValue(':password', sha1($this->password));
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();
    }

    public function deleteAccount($id)
    {
        BaseModel::load();

        $stmt = BaseModel::$pdo->prepare('DELETE FROM users WHERE id=:id');
        $stmt->bindValue(':id', $id);
        $stmt->execute();
    }
}
















/*Class Usermodel extends Basemodel
{
    private int $id;
    private string $name, $email, $password;
    private $createdAt, $updatedAt;

public function __construct()
    {
        parent::__construct();
    }

    public function findByEmail(string $email){

    $query = "SELECT * FROM users WHERE email = :email;";

    if ( $stmt = $this->pdo->prepare ($query)):
    $stmt->bindparam(':email', $email, PDO::PARAM_STR);
    $stmt->execute();
    $data = $stmt->fetch();
    if ($data !== false):
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->email = $data ['email'];
        $this->password = $data ['password'];
        $this->createdAt = $data ['createdAt'];
        $this->updatedAt = $data ['updatedAt'];
        endif;
     endif;
    }
    

    public function getId(): int
    {
        return $this->id;
    }


    public function setId(int $id): void
    {
        $this->id = $id;
    }

   
    
    
}*/
