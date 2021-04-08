<table><thead><tr><th>First Name</th> <th>Last Name</th> <th>Email</th><th>Action</th></tr></thead>

    <?php foreach ($user as $users) { ?>

    <tr>
        <td><?= $users->firstname ?></td>
        <td><?= $users->lastname ?></td>
        <td><?= $users->email ?></td>
        <td>
            <a href='user-edit.php?id= <?=$users->id ?>'>edit</a>
            <a href='delete.php?id=<?= $users->id ?>'>delete</a>

        </td>
    </tr>
<?php } ?>
</table>

<a href='register.php'>Reg</a>