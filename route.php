<?php

include_once "main.php";
include_once "pages/home.php";

$url = isset($_GET['url']) ? $_GET['url'] : '/';

switch ($url) {
    case '/':
    case 'home':
        $home  = new Home();
        $main = new Main("Halaman Utama", $home->showPage());
        break;
    case 'about':
        $main = new Main("About Us", "<h1>About Our Company</h1>");
        break;
    case 'contact':
        $main = new Main("Contact Me", "<h1>Contact Me</h1>");
        break;
    default:
        $main = new Main("404 Not Found", "<h1>Page Not Found</h1>");
        break;
}

$main->showContent();
?>
