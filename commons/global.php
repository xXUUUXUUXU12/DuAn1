<?php
class Database {
    public $pdo;
    public function __construct(){
        $host= DB_HOST;
        $db_name=DB_NAME;
        $pass=DB_PASSWORD;
        $user=DB_USERNAME;
        $port=DB_PORT;
        $dsn="mysql:host=$host;dbname=$db_name;port=$port;charset=UTF8";
        try {
            $this->pdo=new PDO($dsn,$user,$pass);
            if($this->pdo){
                $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
                echo'connect successfully';
            }
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
     }
}