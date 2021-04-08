<?php

session_start();

unset($_SESSION['is_logged']);
session_destroy();
session_regenerate_id();

header("Location: login.php");
exit;