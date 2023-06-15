<?php
// Set the path for the html directory. We are already in the includes directory by this point.
set_include_path(__DIR__.':../art/views/');

// Draw the *full* page (not the static HTML - this is grabbed straight from Active CSS).
include 'head.php';
include 'overlay.php';
include 'header.php';
include $pageInclude.'.html';
include 'nav.php';
include 'news.php';
include 'footer.php';

?>
		