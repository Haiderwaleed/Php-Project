<table><thead><tr><th>Page Title</th><th>Action</th></tr></thead>
    <?php foreach ($users as $user) { ?>
    <tr>
        <td><?= $user->title ?></td>
        <td>
            <a href='editpage.php?id=<?= $user->id ?>'>Edit</a>
            <a href='deletepage.php?id=<?= $user->id ?>'>Delete</a>
        </td>
    </tr>
<?php } ?>
</table>

<a href='addpage.php'>Add Page</a>