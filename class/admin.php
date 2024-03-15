<?php

class Admin {
  private $username;
  private $password;
  private $role;

  public function __construct($username, $password, $role) {
    $this->username = $username;
    $this->password = $password;
    $this->role = $role;
  }

  public function getUsername() {
    return $this->username;
  }

  public function setUsername($newUsername) {
    $this->username = $newUsername;
  }

  public function getRole() {
    return $this->role;
  }

  public function setRole($newRole) {
    $this->role = $newRole;
  }

  public function getPassword() {
    return $this->password;
  }

  public function setPassword($newPassword) {
    $this->password = $newPassword;
  }

  public function convertToArray() {
    return [$this->username, $this->password, $this->role];
  }
}

?>
