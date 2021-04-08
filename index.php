<?php

include 'includes/bootstrap.php';

$portfolio_list = '';
$q = "SELECT * FROM portfolio ORDER  BY id DESC";
if ($stmt = $pdo->query($q)) {
    while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
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

$content = "
<div class=\"container-fluid pt70 pb70\">
    <div id=\"fh5co-projects-feed\" class=\"fh5co-projects-feed clearfix masonry\">
        $portfolio_list
    </div>
</div>";


include "templates/main.php";
