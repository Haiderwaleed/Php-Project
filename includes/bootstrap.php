<?php

if (strpos($_SERVER['REQUEST_URI'], 'admin') !== false) {
    $config = include '../includes/config.php';
}
else {
    $config = include 'includes/config.php';
}

session_start();

$db = mysqli_connect($config['db']['host'],$config['db']['user'],$config['db']['password'],$config['db']['name']);
mysqli_set_charset($db,'utf8');



try {
  $pdo = new PDO("mysql:host={$config['db']['host']};dbname={$config['db']['name']};charset=utf8", $config['db']['user'], $config['db']['password']);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $ex) {
  echo 'database Error';
  error_log($ex->getMessage());
  exit;
}


mb_internal_encoding('utf8');

if (strpos($_SERVER['REQUEST_URI'], 'admin') !== false &&
    !is_logged() &&
    strpos($_SERVER['REQUEST_URI'], 'login.php') === false
) {
    header("Location: login.php");
    exit;
}


function is_logged() {
    return !empty($_SESSION['is_logged']);
}

function pages() {
    $pages = '';
    $q = "SELECT * FROM pages ORDER BY id ASC";
    if ($stmt = $GLOBALS['pdo']->query($q)) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $url = $row['link'] ?: "page.php?id={$row['id']}";
            $pages .= "<li><a href=\"$url\">{$row['title']}</a></li>";
        }
    }
    return $pages;
}