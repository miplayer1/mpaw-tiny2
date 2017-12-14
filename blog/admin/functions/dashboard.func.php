<?php

  function inTable($table) {
    global $db;


    $query = $db->query("SELECT COUNT(id) FROM $table");

    return $nombre = $query->fetch();
  }

 ?>
