<?php
  function getPost() {
    global $db;

    $req = $db->query("
      SELECT  posts.id,
              posts.title,
              posts.image,
              posts.content,
              posts.date,
              posts.ogtitle,
              posts.ogimage,
              posts.ogdescription,
              posts.ogurl,
              admin.name
      FROM posts
      JOIN admin
      ON posts.author = admin.email
      WHERE posts.id = '{$_GET['id']}'
      AND posts.posted = '1'
    ");

    $result = $req->fetchObject();
    return $result;
  }

  function postComment($name, $email, $comment) {
    global $db;

    $c = array(
      'name' => $name,
      'email' => $email,
      'comment' => $comment,
      'post_id' => $_GET['id']
     );

    $sql = "INSERT INTO comments(name, email, comment, post_id, date)
            VALUES (:name, :email, :comment, :post_id, NOW())";

    $req = $db->prepare($sql);

    $req->execute($c);
  }

  function getComment() {
    global $db;

    $req = $db->query("SELECT * FROM comments WHERE post_id = '{$_GET['id']}' ORDER BY date DESC");

    $results = [];

    while ($rows = $req->fetchObject()) {
      $results[] = $rows;
    }
    return $results;
  }
 ?>
