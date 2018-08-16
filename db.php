<?php
class db{


//    protected $db_name="phpadv";
//    protected $db_username="root";
//    protected $db_pass="";
//    protected $db_host="localhost";
    public $conn;

    public function connrct (){
        $this->conn=new mysqli('localhost','root','','task14');
        if($this->conn->connect_error){
            echo "error:".$this->conn->connect_error;
        }
        else{
            echo "connection successfull";
        }

    }
}
?>