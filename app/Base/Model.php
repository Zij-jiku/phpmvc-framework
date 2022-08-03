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
            $dbHost = env('DB_HOST');
            if (empty($dbHost)) {
                throw new Exception('Please Provide DB HOST in .env file');
            }

            // DB Port
            $dbPort = env('DB_PORT');
            if (empty($dbPort)) {
                throw new Exception('Please Provide DB Port in .env file');
            }

            // DB User
            $dbUser = env('DB_USER');
            if (empty($dbUser)) {
                throw new Exception('Please Provide DB User in .env file');
            }

            // DB Password
            $dbPassword = env('DB_PASSWORD');

            // DB Name
            $dbName = env('DB_NAME');
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

    // SQL Query
    /**
     * Execute PDO query.
     *
     * @param string $sqlQuery
     * @return \PDOStatement|false
     */
    public function execute(string $sqlQuery, array $bindParams = []): \PDOStatement|false
    {
        $pdo = $this->connect();
        $stmt = $pdo->prepare($sqlQuery);
        $stmt->execute($bindParams);
        return $stmt;
    }

    /**
     * Get all records from the database.
     *
     * @param string $sqlQuery
     * @return array|false
     */
    public function fetchAll(string $sqlQuery, array $bindParams = []): array|false
    {
        $stmt = $this->execute($sqlQuery, $bindParams);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    /**
     * Get one record from the database.
     *
     * @param string $sqlQuery
     * @return array|false
     */

    public function store(string $sqlQuery)
    {
        $stmt = $this->execute($sqlQuery);
        return $stmt;
    }

    // delete function to delete data from portfolios table
    public function delete(string $sqlQuery, array $bindParams = [])
    {
        $stmt = $this->execute($sqlQuery, $bindParams);
        return $stmt;
        redirect('/portfolios');
    }
}
