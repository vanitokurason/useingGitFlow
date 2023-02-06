<div id="form">
    <form action="/updateMessage" method="POST">
        <input type="hidden" name="message_id" value="<?= $content['message_id'] ?>">
        <label for="userName">*User name:<br>
            <input type="text" id="userName" name="userName" value="<?= $content['name'] ?>" title="Редактирование этого поля недоступно!" readonly>
        </label><br>
        <label for="message">*Message:<br>
            <textarea id="message" rows="4" cols="48" name="message"><?= $content['message'] ?></textarea>
        </label><br>
        <input type="submit" value="Сохранить">
        <a href="/"><button type="button">Отмена/Назад</button></a><br>
    </form>
</div>
