<?php

namespace Notes\App\Entity;

class Note 
{
  private $id;
  private $subject;
  private $result;
  private $id_user;
  private $firstname;
  private $lastname;

  /**
   * Get the value of id
   */ 
  public function getId()
  {
    return $this->id;
  }

  /**
   * Set the value of id
   *
   * @return  self
   */ 
  public function setId($id)
  {
    $this->id = $id;

    return $this;
  }

  /**
   * Get the value of subject
   */ 
  public function getSubject()
  {
    return $this->subject;
  }

  /**
   * Set the value of subject
   *
   * @return  self
   */ 
  public function setSubject($subject)
  {
    $this->subject = $subject;

    return $this;
  }

  /**
   * Get the value of result
   */ 
  public function getResult()
  {
    return $this->result;
  }

  /**
   * Set the value of result
   *
   * @return  self
   */ 
  public function setResult($result)
  {
    $this->result = $result;

    return $this;
  }

  /**
   * Get the value of id_user
   */ 
  public function getId_user()
  {
    return $this->id_user;
  }

  /**
   * Set the value of id_user
   *
   * @return  self
   */ 
  public function setId_user($id_user)
  {
    $this->id_user = $id_user;

    return $this;
  }

  /**
   * Get the value of firstname
   */ 
  public function getFirstname()
  {
    return $this->firstname;
  }

  /**
   * Set the value of firstname
   *
   * @return  self
   */ 
  public function setFirstname($firstname)
  {
    $this->firstname = $firstname;

    return $this;
  }

  /**
   * Get the value of lastname
   */ 
  public function getLastname()
  {
    return $this->lastname;
  }

  /**
   * Set the value of lastname
   *
   * @return  self
   */ 
  public function setLastname($lastname)
  {
    $this->lastname = $lastname;

    return $this;
  }
}