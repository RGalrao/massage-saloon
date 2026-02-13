<?php

require_once "bootstrap.php";

$massagens = get_massagens();

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Massagens Deb</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="css/style.css">

</head>
<body>

  <header class="container-fluid">
    <div class="row">
      <div class="col-12 p-0 mt-2 mb-3">
        <a href="index.php"><img src="public/imgs/Debora_Domingos2.png" alt="logo" id="logo"></a>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-sm-10 p-0 m-auto">
        <nav class="navbar navbar-expand-sm">
          <div class="container-fluid">
            <button class="navbar-toggler mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav m-auto align-items-center">
                <li class="nav-item">
                  <a class="nav-link <?= $menu_atual == 'index' ? 'active' : '' ?>" aria-current="page" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?= $menu_atual == 'sobre' ? 'active' : '' ?>" aria-current="page" href="sobre.php">Sobre</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link <?= ($menu_atual == "massagens") ? "active" : "" ?>" href="massagens.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Massagens
                  </a>
                  <ul class="dropdown-menu">
                    <?php foreach ($massagens as $m): ?>
                      <li><a class="dropdown-item <?= ($menu_atual == "massagens" && $m["id"] == $_GET["id"]) ? "active" : "" ?>" href="massagem.php?id=<?= $m["id"] ?>"><?= $m["nome_massagem"] ?> - <?= $m["tipo_massagem"] ?></a></li>
                    <?php endforeach ?>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?= $menu_atual == 'precario' ? 'active' : '' ?>" aria-current="page" href="precario.php">Preçário</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?= $menu_atual == 'contactos' ? 'active' : '' ?>" aria-current="page" href="contactos.php">Contactos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-link-socials" href="https://www.instagram.com/debi.domingos?igsh=MXVzcnU1a3FlYmR6aw==" target="_blank" aria-label="instagram">
                    <i class="bi bi-instagram"></i>
                  </a>
                </li>
                <!--
                <li class="nav-item">
                  <a class="nav-link nav-link-socials" href="www.facebook.com" target="_blank" aria-label="Facebook">
                    <i class="bi bi-facebook"></i>
                  </a>
                </li> 
                -->
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>

  </header>