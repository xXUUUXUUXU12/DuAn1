<?php
class Danhmuc{
  
    //kết nối database khi gọi vào hàm modelmodel
    public $db;
    public function __construct() {
        $this->db = new Database();
    }
}