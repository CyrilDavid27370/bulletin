<?php

namespace Notes\App\Controller;
use Notes\App\Repository\UserRepository;
use Notes\App\Repository\NoteRepository;

Class BulletinController
{ 
  public function index()
  {
    $userRepo = new UserRepository();
    $users = $userRepo->findAll();

    require('src/view/index.phtml');
  }
  public function show()
  {
    $id = $_GET['id'];
    $noteRepo = new NoteRepository();
    $notes = $noteRepo->findByUser($id);
    require('src/view/show.phtml');
  }
}