<?php


// connect to our MySQL database, and execute a query
class Database
{

    public $connection;

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


        $statement = $this->connection->prepare($query);
        // $statement->execute($params);

        return $statement;
    }
}

// foreach ($posts as $post) {
//     echo "<li>" . $post['title'] . " -By " . $post['author'] . "</li>";
// }