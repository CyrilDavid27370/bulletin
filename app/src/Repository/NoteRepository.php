<?php  

namespace Notes\App\Repository;

use Notes\App\Entity\Note;
use PDO;

class NoteRepository extends Repository
{
  public function findByUser($id)
  {
    $sql = "SELECT user.firstname, user.lastname, note.subject, note.result 
    FROM note 
    JOIN user ON note.id_user = user.id 
    WHERE user.id = :id";
    $request = $this->pdo->prepare($sql);
    $request->execute(['id' => $id]);
    $notes = $request->fetchAll(PDO::FETCH_CLASS, Note::class);
    return $notes;
  }
}