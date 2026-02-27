<?php

namespace Notes\App\Controller;
use Notes\App\Repository\UserRepository;
use Notes\App\Repository\NoteRepository;
use Notes\App\Repository\AppreciationRepository;

class BulletinController
{ 
  public function index()
  {
    $userRepo = new UserRepository();
    $users = $userRepo->findAll();

    require('src/view/index.phtml');
  }
  
  public function show()
  {
    $id = (int)($_GET['id'] ?? 0);
    if ($id<=0) {
      header('Location: /index.php');
      exit;
    }
    $noteRepo = new NoteRepository();
    $notes = $noteRepo->findByUser($id);
    require('src/view/show.phtml');
  }

  public function add()
  {
    
    $id = (int)($_GET['id'] ?? 0);

    if (!empty($_POST)) {
      $appreciationRepo = new AppreciationRepository();
      $appreciationRepo->add($_POST);

      header('Location: /index.php?route=show&id=' . (int)$_POST['id_user']);
      exit;
    }

    require('src/view/add.phtml');
  }

}