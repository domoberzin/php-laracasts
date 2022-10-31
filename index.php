<?php

require 'functions.php';
//require 'router.php';

$DBNAME = "INSERT NAME HERE";
$USERPW = "INSERT PW HERE";

// connect to database (PDO)
$dsn = "mysql:host=localhost;port=3306;dbname={$DBNAME};user=root;password=${USERPW};charset=utf8mb4";

$pdo = new PDO($dsn);

$statement = $pdo->prepare("SELECT * FROM posts");

$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}

class Person
{
    public $name;
    public $age;

    public function breathe()
    {
        echo $this->name . " is breathing";
    }
}

$person = new Person();

$person->name = 'John Doe';
$person->age = 25;




