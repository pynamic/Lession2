
<?php
 class db{
     private  $servername = "localhost";
     private  $username = "root";
     private $password = "";
     private $dbname = "lession2";

// Create connection
    public function open() {
    $conn =new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    return $conn;
    }
// Check connection
}
?>