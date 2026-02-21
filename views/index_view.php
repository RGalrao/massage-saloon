<?php

$texto = get_texto_home();
$massagens = get_massagens();

?>
  <main class="container-fluid">

    <div class="row mt-5">
      <div class="col-12 text-center">
        <h1 class="title">Bem-vindo!</h1>
        <p class="mt-4 px-sm-5 mx-2">
          <?= $texto["texto_home"] ?>
        </p>
      </div>
    </div>

    <div class="row mt-5 d-flex justify-content-center">

      <h2 class="subtitle site-color">Explore a nossa seleção de massagens:</h2>
      <?php foreach($massagens as $massagem): ?>
        <div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center text-center my-4">
          <div class="card" style="width: 22rem;">
            <img src="<?= $massagem["imagem"] ?>" class="card-img-top" alt="<?= $massagem["nome_massagem"] ?>">
            <div class="card-body">
              <h5 class="card-title mt-3 mb-4 site-color"><?= $massagem["nome_massagem"] ?></h5>
              <h4 class="card-subtitle mb-3 site-color"><?= $massagem["tipo_massagem"] ?></h4>
              <p class="card-text"><?= abrv($massagem["descricao"], 250) ?></p>
              <a href="massagem.php?id=<?= $massagem["id"] ?>" class="btn">Ver Mais</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </main>
