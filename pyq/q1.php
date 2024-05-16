<?php

/* [Q] Create a Class Dbconnect which has as function Connection which allows user to connect 
to the database. If the connection is success, it will acknowledgement "Success" else it will 
acknowledge "Try again". Make appropriate exception for that. */
class Dbconnect
{
    private $host;
    private $dbname;
    private $username;
    private $password;

    public function __construct($host, $dbname, $username, $password)
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->username = $username;
        $this->password = $password;
    }

    public function connect()
    {
        try {
            $conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return "Success";
        } catch (PDOException $e) {
            return "Try again: " . $e->getMessage();
        }
    }
}

$dbconnect = new Dbconnect('localhost', 'myDatabase', 'myUsername', 'myPassword');
$message = $dbconnect->connect();
echo $message;
?>