<?php

include  '../includes/bootstrap.php';
$id= (int)$_GET['id'];
$query = "DELETE FROM users WHERE id=:id";
$stmt = $pdo->prepare($query);
$stmt->execute([':id' => $id]);
header("Location: index-users.php");
