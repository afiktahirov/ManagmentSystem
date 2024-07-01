<?php 

class  Database{
    private $user = "root";
    private $password = "";
    private $dsn = "mysql:host=localhost;dbname=Msystem";
    
    public $conn;

    public function __construct(){
        try{
            $this->conn = new PDO($this->dsn,$this->user,$this->password);
        }
        catch(PDOException $error){
           echo $error->getMessage();
        }
    }
    
    public function insert(){
        //
    }
}


$ob = new Database();