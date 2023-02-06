<div id="form">
    <form action="/saveMessage" method="POST">
        <label for="userName">*User name:<br>
            <input type="text" id="userName" name="userName" title="Только цифры и буквы латинского алфавита" pattern="[A-Z|a-z|0-9]+" required>
        </label><br>
        <label for="email">*Email:<br>
            <input type="email" id="email" name="email" placeholder="mail@example.com" title="mail@example.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
        </label><br>
        <label for="site">Site:<br>
            <input type="text" id="site" name="site">
        </label><br>
        <label for="message">*Message:<br>
            <textarea id="message" rows="4" cols="48" name="message"></textarea>
        </label><br>
        <input type="submit" value="Сохранить">
        <a href="/"><input type="button" value="Отмена/Назад"></a><br>
        <span>* - поле обязательно к заполнению!</span>
    </form>
</div>
