<?php

namespace App\Controllers;

use Core\Controller;
use Core\Page;
use App\Models\Message;
use App\Models\User;

class MessageController extends Controller
{
    public function create(): Page
    {
        $this->title = 'Create message';
        $content = '';
        return $this->render('sendForm', $content);
    }

    public function edit(array $params): Page
    {
        $this->title = 'Edit message';
        $message = (new Message())->getOneMessage($params['id']);
        if ($message) {
            $content = $message;
            $view = 'editMessage';
        } else {
            $content = 'Такой записи не существует!';
            $view = 'showMessage';
        }

        return $this->render($view, $content);
    }

    public function update(): Page
    {
        if ($_REQUEST['message_id'] && $_REQUEST['message']) {
            $params = [
                'message_id' => $_REQUEST['message_id'],
                'message' => $_REQUEST['message'],
            ];

            $result = (new Message())->updateMessage($params);
            if ($result) {
                $content = 'Запись успешно обновлена!';
            } else {
                $content = 'Возникла ошибка! Повторите попытку!';
            }
        } else {
            $content = 'Не удалось обновить запись. Поле сообщения не может быть пустым! Повторите попытку!';
        }

        return $this->render('showMessage', $content);
    }

    public function save(): Page
    {
        if ($_REQUEST['userName'] && $_REQUEST['email'] && $_REQUEST['message']) {

            $params = [
                'userName' => $_REQUEST['userName'],
                'email' => $_REQUEST['email'],
                'site' => $_REQUEST['site'] ?? null
            ];

            $user = new User();
            $user_id = $user->createUser($params);
            if ($user_id) {
                $message = new Message();
                $params = [
                    'user_id' => $user_id,
                    'message' => $_REQUEST['message']
                ];
                $result = $message->createMessage($params);
                if ($result) {
                    $content = 'Запись успешно создана!';
                } else {
                    $content = 'Возникла ошибка! Повторите попытку!';
                }
            }
        } else {
            $content = 'Не удалось создать запись. Возможно Вы не ввели текст сообщения. Повторите попытку!';
        }

        return $this->render('showMessage', $content);
    }

    public function getList(): Page
    {
        $this->title = 'Guesthouse. Отзывы посетителей';
        $message = new Message();
        $content = $message->getAllMessages();
        return $this->render('showAllMessages', $content);
    }
}
