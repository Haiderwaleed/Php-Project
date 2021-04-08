<?php

include 'includes/bootstrap.php';

$id  = (int) $_GET['id'];

$q = "SELECT * FROM pages WHERE id=$id";
if ($stmt = $pdo->query($q)) {
    $page = $stmt->fetch(pdo::FETCH_OBJ);
    $image = '';
    if ($page->image) {
        $image = "<p class=\"text-center\"><img src=\"{$page->image}\"></p>";
    }
    $content = "	
	<div class=\"page-content\">
			<h1 class=\"mb0\">{$page->title}</h1>
			$image
			{$page->body}
    </div>";

}



include "templates/main.php";


