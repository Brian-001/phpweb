<?php 

class Database
{
    //Define a property and make it public in order to access it in any class
    public $connection;

    public function __construct($config, $user = 'abstract-programmer', $password = 'Developer254@'){


        $dsn = 'mysql:' . http_build_query($config, '', ';'); //example.com?=foo=bar

        $this->connection = new PDO($dsn, $user, $password, [

            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC 
        ]);
    }

    public function query($query, $params = [])
    {
        
        $statement = $this->connection->prepare($query);

        $statement->execute($params);

        return $statement;

    }
}