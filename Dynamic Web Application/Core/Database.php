<?php

namespace Core;

use PDO;

// connect to our MySQL database, and execute a query
class Database
{

    public $connection;
    public $statement;

    public function __construct($config)
    {
        

        $dsn = 'mysql:' . http_build_query($config, '', ';'); // example.com?host=localhost&port=3306&dbname=myapp

        // $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";

        $username = 'root';
        $password = 'test123';

        // pdo instant
        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }


    public function query($query, $params = [])
    {


        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);

        return $this;
    }

    public function get() 
    {
        return $this->statement->fetchAll();
    }

    // creating a fetch method
    public function find() 
    {
        return $this->statement->fetch();
    }


    public function findOrFail() 
    {
        $result = $this->find();

        if(! $result) 
        {
            abort();
        }

        return $result;
    }
}

// foreach ($posts as $post) {
//     echo "<li>" . $post['title'] . " -By " . $post['author'] . "</li>";
// }