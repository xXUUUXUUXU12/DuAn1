<?php
// class Database {
//     public $pdo;
//     public function __construct(){
//         $host= DB_HOST;
//         $db_name=DB_NAME;
//         $pass=DB_PASSWORD;
//         $user=DB_USERNAME;
//         $port=DB_PORT;
//         $dsn="mysql:host=$host;dbname=$db_name;port=$port;charset=UTF8";
//         try {
//             $this->pdo=new PDO($dsn,$user,$pass);
//             if($this->pdo){
//                 $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
//                 echo'connect successfully';
//             }
//         } catch (PDOException $th) {
//             echo $th->getMessage();
//         }
//      }
// }


// Kết nối CSDL qua PDO
function connectDB() {
    // Kết nối CSDL
    $host = DB_HOST;
    $port = DB_PORT;
    $dbname = DB_NAME;

    try {
        $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname", DB_USERNAME, DB_PASSWORD);

        // cài đặt chế độ báo lỗi là xử lý ngoại lệ
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // cài đặt chế độ trả dữ liệu
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
        return $conn;
    } catch (PDOException $e) {
        echo ("Connection failed: " . $e->getMessage());
    }
}
