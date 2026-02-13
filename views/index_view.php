<?php

// WhYiKQWyTOG3FoR - if0_41126480 (Website for SiteDeb) - infinityfree

$massagens = get_massagens();

?>
  <main class="container-fluid">

    <div class="row mt-5">
      <div class="col-12 text-center">
        <h1 class="title">Bem-vindo!</h1>
        <p class="mt-4 px-sm-5 mx-2">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, earum totam tenetur quos, sed ad aperiam provident id reprehenderit quae officia. 
          <br><br>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, earum totam tenetur quos, sed ad aperiam provident id reprehenderit quae officia. 
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
              <p class="card-text"><?= abrv($massagem["descricao"], 150) ?></p>
              <a href="massagem.php?id=<?= $massagem["id"] ?>" class="btn">Ver Mais</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>





<!--       
      <div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center text-center my-4">
        <div class="card" style="width: 22rem;">
          <img src="public/imgs/massagem-corpo.avif" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Massagem Terapêutica</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
            <a href="massagens.php" class="btn">Ver Mais</a>
          </div>
        </div>
      </div>
      
      
      <div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center text-center my-4">
        <div class="card" style="width: 22rem;">
          <img src="public/imgs/cranio-facial.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Massagem Crânio-Facial</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
            <a href="massagens.php" class="btn">Ver Mais</a>
          </div>
        </div>
      </div>  
      
      <div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center text-center my-4">
        <div class="card" style="width: 22rem;">
          <img src="public/imgs/massagem-modeladora2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Massagem Modeladora</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
            <a href="massagens.php" class="btn">Ver Mais</a>
          </div>
        </div>
      </div>
      
      <div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center text-center my-4">
        <div class="card" style="width: 22rem;">
          <img src="public/imgs/massagem-desportiva2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Massagem Desportiva</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
            <a href="massagens.php" class="btn">Ver Mais</a>
          </div>
        </div>
      </div> 
    -->
      
      
    </div>

  </main>
