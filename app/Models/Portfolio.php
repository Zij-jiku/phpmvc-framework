<?php

namespace App\Models;

use App\Base\Model;
use Pecee\Http\Request;

class Portfolio extends Model
{
    protected string $tableName = 'portfolios';

    /**
     * Get portfolios by status.
     *
     * @param integer $status, default is 1, values: 1, 0, -1
     * @return array|false
     */
    public function get(int $status = 1): array|false
    {
        $sql = "SELECT * FROM {$this->tableName}";
        if ($status !== -1) {
            $sql .= " WHERE status = ?";
        }
        return $this->fetchAll($sql, [$status]);
    }

    // post function to insert data to portfolios table
    public function create(array $data)
    {
        $title    = $data['title'];
        $desc     = $data['description'];
        $status   = $data['status'];

        $sql = "INSERT INTO {$this->tableName} (title, description, status) VALUES ($title, $desc, $status)";
        return $this->store($sql);
    }

    // delete function to delete data from portfolios table
    public function deleteById(int $id)
    {
        $sql = "DELETE FROM {$this->tableName} WHERE id = $id";
        return $this->delete($sql);
    }
}
