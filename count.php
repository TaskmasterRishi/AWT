<?php
session_start();

if (!isset($_SESSION['page_views_count'])) {
   
    $_SESSION['page_views_count'] = 1;
} 

else {
    $_SESSION['page_views_count']++;
}

echo 'Page views count: '. $_SESSION['page_views_count'];
?>
