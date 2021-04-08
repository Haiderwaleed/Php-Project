<?php

include '../includes/bootstrap.php';

include 'templates/header.php';

$user_id = $_SESSION['is_logged'];
$q = "SELECT * FROM users WHERE id = '$user_id'";
$stmt = $pdo->prepare($q);
$stmt->execute([':id' => $user_id]);
$user = $stmt->fetch();

echo "Hello {$user['firstname']} {$user['lastname']}";

include 'templates/footer.php';