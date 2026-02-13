<?php

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if (!$id) {
    die("ID inválido.");
}

$massagem = get_massagem($id);

if (!$massagem) {
    die("Massagem não encontrada.");
}

?>

  <main class="container-fluid">

    <div class="row mt-5">
      <div class="col-12 text-center">
        <h1 class="title"><?= $massagem["nome_massagem"] ?></h1>
        <h3 class="subtitle mt-3"><?= $massagem["tipo_massagem"] ?></h3>
      </div>
    </div>

    <div class="row mt-3 mb-5 justify-content-center">
      <div class="col-4 col-md-3">
        <div><span class="site-color fs-5">Duração:</span><span class="fw-3"> <?= $massagem["duracao"] ?> <?= ($massagem["duracao"] != "Variável") ? "min" : "" ?></span></div>
      </div>

      <div class="col-4 col-md-3">
        <div><span class="site-color fs-5">Preço:</span><span class="fw-3"> <?= $massagem["preco"] ?>€</span></div>
      </div>
    </div>

    <div class="row justify-content-center mb-5">
      <div class="col-12 col-xl-5 mb-4 mb-xl-0">
        <img src="<?= $massagem["imagem"] ?>" alt="<?= $massagem["nome_massagem"] ?>" class="img-fluid rounded shadow img-massagem">
      </div>

      <div class="col-12 col-xl-5 my-auto">
        <p class="text-center"><?= $massagem["descricao"] ?></p>
      </div>
    </div>

    <div class="row">
      <div class="col-12 text-center">
        <a href="contactos.php" class="btn btn-primary">Agendar</a>
      </div>
    </div>

  </main>
