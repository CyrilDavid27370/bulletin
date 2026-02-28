<?php

namespace Notes\App\Controller;
use Notes\App\Repository\UserRepository;
use Notes\App\Repository\NoteRepository;
use Notes\App\Repository\AppreciationRepository;

class BulletinController
{ 
  private $userRepo;
  private $noteRepo;
  private $appreciationRepo;

  public function __construct()
  {
      $this->userRepo = new UserRepository;
      $this->noteRepo = new NoteRepository;
      $this->appreciationRepo = new AppreciationRepository;
  }
  public function index()
  {

    $users =  $this->userRepo->findAll();

    require('src/view/index.phtml');
  }
  
  public function show()
  {
    $id = (int)($_GET['id'] ?? 0);
    if ($id<=0) {
      header('Location: /index.php');
      exit;
    }
    $notes = $this->noteRepo->findByUser($id);

    $appreciation = $this->appreciationRepo->findByUser($id);
    
    require('src/view/show.phtml');
  }

  public function add()
  {
    
    $id = !empty($_POST) ? (int)$_POST['id_user'] : (int)($_GET['id'] ?? 0);
    
    if (!empty($_POST)) {
  
      $this->appreciationRepo->add($_POST);

      header('Location: /index.php?route=show&id=' . (int)$_POST['id_user']);
      exit;
    }

    require('src/view/add.phtml');
  }

  public function delete() 
  {
    $id = (int)($_GET['id'] ?? 0);
    $id_user = (int)($_GET['id_user'] ?? 0);
    
    $this->appreciationRepo->delete($id);
    
    header('Location: /index.php?route=show&id=' . $id_user);
    exit;
  }

  public function update()
  {
    $id = !empty($_POST) ? (int)$_POST['id'] : (int)($_GET['id'] ?? 0);
    
    if (!empty($_POST)) {
  
      $this->appreciationRepo->update($_POST);

      header('Location: /index.php?route=show&id=' . (int)$_POST['id_user']);
      exit;
    }
    $appreciation = $this->appreciationRepo->findById($id);
    
    require('src/view/update.phtml');
  }
}