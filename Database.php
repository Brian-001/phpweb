<?php 

class Database
{
    //Define a property and make it public in order to access it in any class
    public $connection;

    public function __construct(){

        $dsn = "mysql:host=localhost;port=3306;dbname=phpweb;charset=utf8mb4";

        $this->connection = new PDO($dsn,'abstract-programmer', 'Developer254@', []);
    }

    public function query($query)
    {
        
        $statement = $this->connection->prepare($query);

        $statement->execute();

        return $statement;

    }
}