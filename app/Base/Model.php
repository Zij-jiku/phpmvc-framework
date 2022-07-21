<?php


namespace App\Base;

use Exception;

class Model
{
    public function __construct()
    {
        $this->connect();
    }

    public function connect(): \PDO
    {
        try {
            // DB HOST
            $dbHost = isset($_ENV['DB_HOST']) ? $_ENV['DB_HOST'] : '';
            if (empty($dbHost)) {
                throw new Exception('Please Provide DB HOST in .env file');
            }

            // DB Port
            $dbPort = isset($_ENV['DB_PORT']) ? $_ENV['DB_PORT'] : '';
            if (empty($dbPort)) {
                throw new Exception('Please Provide DB Port in .env file');
            }

            // DB User
            $dbUser = isset($_ENV['DB_USER']) ? $_ENV['DB_USER'] : '';
            if (empty($dbUser)) {
                throw new Exception('Please Provide DB User in .env file');
            }

            // DB Password
            $dbPassword = isset($_ENV['DB_PASSWORD']) ? $_ENV['DB_PASSWORD'] : '';

            // DB Name
            $dbName = isset($_ENV['DB_NAME']) ? $_ENV['DB_NAME'] : '';
            if (empty($dbName)) {
                throw new Exception('Please Provide DB Name in .env file');
            }

            // Database Connection
            return new \PDO("mysql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
        } catch (\PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function execute(string $sqlQuery): \PDOStatement|false
    {
        // use the connection here
        $data = $this->connect()->query($sqlQuery);
        $data->execute();
        return $data;
    }

    public function fetchAll(string $sqlQuery): array|false
    {
        // use the connection here
        $data = $this->execute($sqlQuery);
        return $data->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function fetchObj(string $sqlQuery): mixed
    {
        // use the connection here
        $data = $this->execute($sqlQuery);
        return $data->fetch(\PDO::FETCH_ASSOC);
    }
}
