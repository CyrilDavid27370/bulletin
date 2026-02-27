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
      'mention' => $data['mention'],
      'id_user' => $data['id_user'],
    ]);
  }
}
