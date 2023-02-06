<div>
    <h3>Отзывы наших гостей:</h3>
    <?php if ($content): ?>
    <table>
        <tr>
            <th>name</th>
            <th>email</th>
            <th>created_at</th>
            <th>message</th>
            <th></th>
        </tr>
        <?php foreach ($content as $elem) : ?>
        <tr>
            <td><?= $elem['name'] ?></td>
            <td><?= $elem['email'] ?></td>
            <td><?= $elem['created_at'] ?></td>
            <td><?= $elem['message'] ?></td>
            <td><a href="/editMessage/<?= $elem['message_id'] ?>/">edit</a> </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php else: ?>
    <p>Здесь пока что нет отзывов.</p>
    <?php endif; ?>
    <a href="/createMessage"><button type="button">Оставить отзыв</button></a><br>
</div>
