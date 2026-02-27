<?php

require 'vendor/autoload.php';

use Notes\App\Controller\BulletinController;

if(isset($_GET['route'])) {
    $route = $_GET['route'];
} else {
    $route ='index';
}

if ($route === 'index') {
    $bulletinController = new BulletinController();
    $bulletinController->index();
} elseif ($route === 'show') {
    $bulletinController = new BulletinController();
    $bulletinController->show();
}