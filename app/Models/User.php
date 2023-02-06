<?php
namespace App\Models;

use Core\Model;

class User extends Model
{
    public function createUser($params): int
    {
        $query = 'INSERT INTO users (name, email, home_page) VALUES (:userName, :email, :site)';
        $user_id = $this->createOne($query, $params);
        if ($user_id) {
            return self::$link->lastInsertId('users');
        } else {
            return 0;
        }
    }
}
