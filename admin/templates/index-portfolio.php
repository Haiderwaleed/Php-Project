<table><thead><tr><th>Title</th><th>Action</th></tr></thead>
<?php foreach ($user as $users) { ?>
   <tr>
        <td> <?= $users->title ?></td>

        <td>
            <a href='editportfolio.php?id=<?= $users->id ?>'>edit</a>
            <a href='deleteportfolio.php?id=<?= $users->id ?>'>delete</a>
        </td>
    </tr>

<?php } ?>
</table>


<a href='addportfolio.php'>Add</a>

