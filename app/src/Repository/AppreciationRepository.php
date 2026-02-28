<?php

namespace Notes\App\Repository;

use Notes\App\Entity\Appreciation;
use PDO;

class AppreciationRepository extends Repository
{
  public function add($data) 
  {
    $sql = "INSERT INTO appreciation (comment, mention, id_user) VALUES (:comment, :mention, :id_user)";
    $request = $this->pdo->prepare($sql);
    return $request->execute([
      'comment' => $data['comment'],
      'mention' => $data['mention'] ?? null,
      'id_user' => $data['id_user'],
    ]);
  }

  public function findByUser($id)
  {
    $sql = "SELECT * FROM appreciation WHERE id_user = :id";
    $request = $this->pdo->prepare($sql);
    $request->execute(['id' => $id]);
    $request->setFetchMode(PDO::FETCH_CLASS, Appreciation::class);
    $appreciation = $request->fetch();
    return $appreciation;
  }
  
  public function delete($id) {
    $sql = "DELETE FROM appreciation WHERE id = :id";
    $request = $this->pdo->prepare($sql);
    $request->execute(['id' => $id]);
  }

  
  public function findByid($id)
  {
    $sql = "SELECT * FROM appreciation WHERE id = :id";
    $request = $this->pdo->prepare($sql);
    $request->execute(['id' => $id]);
    $request->setFetchMode(PDO::FETCH_CLASS, Appreciation::class);
    $appreciation = $request->fetch();
    return $appreciation;
  }

  public function update($data)
  {
    $sql = "UPDATE appreciation SET comment = :comment, mention = :mention WHERE id = :id";
    $request = $this->pdo->prepare($sql);
    $request->execute([
      'id' => $data['id'],
      'comment' => $data['comment'],
      'mention' => $data['mention'] ?? null,
      ]);
  }
}


