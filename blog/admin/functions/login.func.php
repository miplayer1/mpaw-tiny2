<?php

  function isAdmin($email, $password) {
    global $db;

    $credentials = [
      'email'     => $email,
      'password'  => $password
    ];

    $sql = "SELECT * FROM admin WHERE email = :email AND password = :password";

    $req = $db->prepare($sql);

    $req->execute($credentials);

    $exists = $req->rowCount($sql);

    return $exists;
  }

 ?>
