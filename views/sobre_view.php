<?php

$about_me = get_about_me();
$formacoes = get_formacoes();

?>

  <main class="container-fluid">

    <div class="row mt-5 m-1 border-rounded rounded-3 shadow">

      <div class="col-12 px-sm-5 py-4 m-auto">
        <h1 class="title mb-4">Quem sou?</h1>
        <p>
          <?= $about_me["about_me"] ?>
        </p>
      </div>
    </div>


    <div class="row mt-5 m-1 border-rounded rounded-3 shadow">
      <div class="col-12  px-sm-5 py-4 m-auto">
        <h1 class="title mb-4">Formações e Especializações</h1>
        <ul class="m-auto list px-3 py-2 d-inline-block text-start">
          <?php foreach($formacoes as $f):?>
            <li><?= $f["formacao"] ?></li>
          <?php endforeach;?>
        </ul>
      </div> 
    </div>

    <div class="row mt-5 m-1 border-rounded rounded-3 shadow">
      <div class="col-12 px-sm-5 py-4 m-auto text-center">
        <h1 class="title mb-4">Massagens:</h1>
        <p>
          Explore a minha seleção de massagens:
        </p>
        <a href="massagens.php" class="btn m-4">Ver Massagens</a>
    </div>

  </main>
