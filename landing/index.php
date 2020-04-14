<?php
header('Location: index.html');
$page = $_GET['page'] ?? 'landing';
switch ($page) {
    case 'landing':
        header('Location: index.html');
        break;
    case 'news':
        header('Location: News_page.html');
        break;

}
