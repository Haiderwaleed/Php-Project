<?php

include '../includes/bootstrap.php';

include 'templates/header.php';
include 'indexcss.php';


$query = "SELECT * FROM pages ORDER BY id DESC";
if ($stmt = $pdo->query($query)){
    $users = $stmt->fetchAll(PDO::FETCH_OBJ);
}
include 'templates/index-pages.php';
include 'templates/footer.php';