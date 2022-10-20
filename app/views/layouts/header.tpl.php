<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antoine Huet</title>

    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
  <div class="container">
    <header>
        <nav class="menu nav justify-content-between navbar-expand-lg">
          <a class="nav__home" href="<?= $router->generate('main-home') ?>"><i class="bi bi-house-fill"></i></a>
          <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><i class="bi bi-list"></i></span>
    </button>
          <div class="nav__menu nav justify-content-end collapse navbar-collapse" id="navbarToggler">
            <ul class="mb-2 mb-lg-0">
              <li><a href="<?=  $router->generate('main-profil') ?>"><i class="bi bi-file-earmark-person-fill"></i></a></li>
              <li><a href=""><i class="bi bi-file-text"></i></a></li>
            </ul>
          </div>
        </nav>
    </header>