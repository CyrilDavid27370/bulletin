<?php

namespace Notes\App\Controller;

use Notes\App\Repository\UserRepository;

Class UserController
{
  public function index()
  {
    $userRepo = new UserRepository();
    $users = $userRepo->findAll();

    require('src/view/index.phtml');
  }
}