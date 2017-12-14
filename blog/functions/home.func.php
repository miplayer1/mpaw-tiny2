<?php
  function getPosts() {
    global $db;

    $req = $db->query("
      SELECT  posts.id,
              posts.title,
              posts.content,
              posts.author,
              posts.image,
              posts.date,
              admin.name

      FROM posts
      JOIN admin
      ON posts.author=admin.email
      WHERE posted ='1'
      ORDER BY date DESC
      LIMIT 0,2
    ");

    $results = [];

    while($rows = $req->fetchObject()) {
      $results[] = $rows;
    }
    return $results;
  }
?>
