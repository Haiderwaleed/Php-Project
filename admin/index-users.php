<?php

include '../includes/bootstrap.php';

include 'templates/header.php';
include 'indexcss.php';

$query = "SELECT * FROM users ORDER BY id DESC";
if ($stmt = $pdo->query($query)) {
    $user = $stmt->fetchAll(pdo::FETCH_OBJ);
}

include 'templates/footer.php';
include 'templates/index-users.php';