<?php
// ROUTER

$uri = $_SERVER['REQUEST_URI'];

switch ($uri) {
    case '/':
        require 'controllers/home.php';
        break;
    case '/webmaster-creation-site-vitrine':
        require 'controllers/webmaster-creation-site-vitrine.php';
        break;
    case '/consultant-seo':
        require 'controllers/consultant-seo.php';
        break;
    case '/mail':
        require 'controllers/mail.php';
        break;
    case '/conditions-generales':
        require 'controllers/conditions-generales.php';
        break;
    default:
        echo '404';
}
