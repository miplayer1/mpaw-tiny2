<?php
  var_dump($_SESSION);

 ?>
 <h2 class="center">Welcome to your dashboard</h2>
 <div class="row">
   <?php

    $tables = [
      "Publications"    => 'posts',
      "Commentaires"    => 'comments',
      "Administrateurs" => 'admin'
    ];

    ?>

    <?php

      foreach ($tables as $table_name => $table) {
    ?>

    <div class="col l4 m6 s12">
      <div class="card">
        <div class="card-content white-text blue">
          <span class="card-title"><?= $table ?></span>
          <?php $nb = inTable($table); ?>
          <h4 class="center"><?= $nb[0] ?></h4>
        </div>
      </div>
    </div>

    <?php
      }

     ?>

   <!-- <div class="col l4 m6 s12">
     <div class="card">
       <div class="card-content white-text green">
         <span class="card-title">Publications</span>
         <h4 class="center">10</h4>
       </div>
     </div>
   </div>
   <div class="col l4 m6 s12">
     <div class="card">
       <div class="card-content white-text red">
         <span class="card-title">Administrateurs</span>
         <h4 class="center">10</h4>
       </div>
     </div>
   </div>
 </div> -->
