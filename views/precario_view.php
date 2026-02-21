<?php

$massagens = get_massagens();

?>

<main class="container-fluid">
  <div class="row mt-5">
    <div class="col-12 text-center">
      <h1 class="title">Preçário</h1>
      <p class="mt-4">
        Aqui tem o preçário dos nossos serviços de massagem.
        <br><br>
        Oferecemos uma variedade de massagens para atender às suas necessidades.
        <br><br>
        Consulte os preços abaixo:
      </p>
    </div>
  </div>


  <div class="row mt-5">
    <div class="col-12 col-md-7 m-auto">
      <table class="table table-striped table-bordered align-middle table-precario">
        <thead>
          <tr>
            <th>Massagem</th>
            <th>Duração</th>
            <th>Preço</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($massagens as $massagem): ?>
            <tr>
              <td><b><?= $massagem["nome_massagem"] ?></b> <br> <?= $massagem["tipo_massagem"] ?></td>
              <td><?= $massagem["duracao"] ?> <?= ($massagem["duracao"] != "Variável") ? "min" : "" ?></td>
              <td><?= $massagem["preco"] ?> €</td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</main>