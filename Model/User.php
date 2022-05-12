<?php
namespace Model;

use Model\Db;

class User extends Db {

  public function createUSer($user){

    $user['password'] = password_hash($user['password'], PASSWORD_DEFAULT);
  
    $sql = "
      INSERT INTO users (
        name,
        email,
        password
      ) VALUES ( 
        :name,
        :email,
        :password
      )
    ";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute($user);

    session_start();
    $_SESSION['name'] = $user['name'];
    $_SESSION['email'] = $user['email'];
    $_SESSION['role'] = 'member';
    $_SESSION['login'] = true;  

    return $this->pdo->lastInsertId();
  }
  public function checkUser($user){
    $sql = "
      SELECT
        name,
        email,
        role,
        password
      FROM
        users
      WHERE
        users.email = ?
    ";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([$user['email']]);
    $data = $stmt->fetchAll();
    $userDB = $data[0];

    if(password_verify($user['password'], $userDB['password'])){
      session_start();
    $_SESSION['name'] = $userDB['name'];
    $_SESSION['email'] = $userDB['email'];
    $_SESSION['role'] = $userDB['role'];
    $_SESSION['login'] = true;  
    return true ;
    }else { 
      return false;
    }
  }
}