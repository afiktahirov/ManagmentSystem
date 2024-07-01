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
    
    public function insert($fname,$lname,$email,$phone){
        $sql = "INSERT INTO users (first_name,last_name,email,phone) VALUES (:fname,:lname,:email,:phone)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['fname'=>$fname,'lname'=>$lname,'email'=>$email,'phone'=>$phone]);
        return true;
    }

    public function read(){
        //
    }
}


$ob = new Database();