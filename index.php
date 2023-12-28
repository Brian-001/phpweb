<?php 

require "functions.php";

// require "router.php";

//Make a class

class Database
{
    public function query($query)
    {
        $dsn = "mysql:host=localhost;port=3306;dbname=phpweb; user=abstract-programmer; password=Developer254@; charset=utf8mb4";

        $pdo = new PDO($dsn);

        $statement = $pdo->prepare("select * from posts where id > 1");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);

    }
}

$db = new Database();
$posts = $db->query($query);



foreach ($posts as $post){

    echo "<li>" . $post['title'] . "</li>";
}