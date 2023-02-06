<?php

namespace App\Models;

use Core\Model;

class Message extends Model
{
    public function createMessage($params): bool
    {
        $params = [
            'user_id' => $params['user_id'],
            'ip' => $_SERVER['REMOTE_ADDR'],
            'browser_data' => $_SERVER['HTTP_USER_AGENT'],
            'message' => $params['message']
        ];
        $query = "INSERT INTO messages (user_id, ip, browser_data, message) VALUES (:user_id, INET_ATON(:ip), :browser_data, :message)";
        return $this->createOne($query, $params);
    }

    public function updateMessage($params): bool
    {
        $query = 'UPDATE messages SET message = :message WHERE id = :message_id';
        return $this->updateOne($query, $params);
    }

    public function getAllMessages(): array
    {
        $query = "SELECT name, email, created_at, message, messages.id as message_id FROM messages LEFT JOIN users ON users.id = messages.user_id ORDER BY 3 DESC";
        return $this->findMany($query);
    }

    public function getOneMessage($id): array
    {
        $query = "SELECT name, email, home_page, message, messages.id as message_id FROM messages LEFT JOIN users ON users.id = messages.user_id WHERE messages.id = :id";
        return $this->findOne($query, $id);
    }


    private function getBrowser()
    {
        $browserMap = [
            'YaBrowser' => 'Yandex browser',
            'Chrome' => 'Chrome',
            'Firefox' => 'Firefox',
            'OPR' => 'Opera',
            'MSIE' => 'Internet Explorer 7',
            'Trident' => 'Internet Explorer',
            'Safari' => 'Safari'
        ];

        $user_agent = $_SERVER["HTTP_USER_AGENT"];
        foreach ($browserMap as $key => $elem) {
            if (strpos($user_agent, $key) !== false) {
                return $elem;
            } else {
                $browser = "Неизвестный";
            }
        }

        return $browser;
    }
}
