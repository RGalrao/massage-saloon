<?php

require_once "../bootstrap.php";
verificar_login();

?>


  <main class="container-fluid">

    <div class="row">
      <div class="col-11 col-sm-7 col-md-4 m-auto mt-4 border border-4 border-info rounded-4 p-4">

        <h3>Bem vindo <?= $colaborador["username"] ?></h3>
        <br>
        <h4>Data do último acesso: <br> (<?= date("H:i:s - d/m/Y",strtotime($colaborador["ultimo_acesso"])) ?>)</h4>
      </div>
    </div>
  </main>
