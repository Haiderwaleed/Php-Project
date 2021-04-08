<?php

include 'includes/bootstrap.php';

$id  = (int) $_GET['id'];

$q = "SELECT * FROM portfolio WHERE id=$id";
if ($stmt = $pdo->query($q)) {
    $page = $stmt->fetch(pdo::FETCH_OBJ);
    $image = '';
    if ($page->image) {
        $image = "<p class=\"text-center\"><img src=\"{$page->image}\" alt=\"Haider\"></p>";
    }
    $url = '';
    if($page['url']){
        $url = "<a href='{$page->url}' target=_blank>View More</a> <br>";
    }
    $content = "	
	<div class=\"page-content\">
            <h1 class=\"mb0\">{$page->title}</h1>
            $url
			$image
			{$page->body}
    </div>";

}


$portfolio_list = '';
$q = "SELECT * FROM portfolio ORDER  BY id DESC";
if ($stmt = $pdo->query($q)) {
    while ($row = $stmt->fetch(pdo::FETCH-OBJ)) {
        $image = '';
        if ($row->image) {
            $image = "<img src=\"{$row->image}\" alt=\"Haider\">";
        }
        $portfolio_list .= "<div class=\"fh5co-project masonry-brick\">
            <a href=\"project.php?id={$row->id}\">
                $image
                <h2>{$row->title}</h2>
            </a>
        </div>";
    }
}

$content .= "
<div class=\"container-fluid pt70 pb70\">
    <div id=\"fh5co-projects-feed\" class=\"fh5co-projects-feed clearfix masonry\">
        $portfolio_list
    </div>
</div>";



include "templates/main.php";
