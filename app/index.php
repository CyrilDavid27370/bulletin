<?php

require 'vendor/autoload.php';

use Notes\App\Controller\UserController;

if(isset($_GET['route'])) {
    $route = $_GET['route'];
} else {
    $route ='index';
}

if ($route === 'index') {
    $userController = new UserController();
    $userController->index();
}
