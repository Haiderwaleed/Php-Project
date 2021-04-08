<?php

include '../includes/bootstrap.php';

$id= (int)$_GET['id'];
$query = "DELETE FROM pages WHERE id=$id";
$stmt = $pdo->prepare($query);
$stmt->execute([':id' => $id]);
header("Location: index-pages.php");

