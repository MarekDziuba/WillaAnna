<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Willa Anna</title>
  <link rel="icon" href="zdjecia/logo_karty.jpg">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;1,400;1,600&family=Lora:wght@400;500&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <script async src="cookie-banner.js"></script>
</head>
<body class="bg-body-secondary">

<?php include 'menu-bar.php'; ?>

<?php include 'reservation-bar.php'; ?>

<div class="container my-5">
  <div class="row g-0 about-card align-items-stretch">
    <div class="col-12 col-lg-5 p-5 text-end d-flex flex-column justify-content-center">
      <h2 class="mb-3 pb-4">O nas</h2>
      <p class="mb-3" style="max-width: 440px; font-size: 18px;">Willa Anna znajduje się w centrum uzdrowiska w pobliżu Parku Kuracyjnego i kompleksu sportowo-rekreacyjnego nad rzeką Wisłą. Jest doskonałą bazą wypadową na szlaki turystyczne; m.in.: Równicę ( 884 m n.p.m.) i Czantorię ( 995 m n.p.m.). W okolicy znajduje się wiele atrakcyjnych miejscowości takich jak Wisła, Szczyrk i miasto graniczne Cieszyn. Miła obsługa, domowa atmosfera – to warunki w których naprawdę można wypocząć</p>
    </div>
    <div class="col-12 col-lg-7 about-photo">
      <img src="zdjecia/chwilowe.png" class="w-100 d-block" style="height:auto;" alt="photo1">
    </div>
  </div>
</div>

<div class="container-fluid px-0">
  <div class="row g-0">
    <div class="col-12 col-md-4">
      <a href="galeria/" class="tile">
        <img src="zdjecia/galeria.jpg" class="tile-img" alt="Galeria">
        <div class="tile-label">Galeria</div>
      </a>
    </div>

    <div class="col-12 col-md-4">
      <a href="cennik/" class="tile">
        <img src="zdjecia/cennik.jpg" class="tile-img" alt="Cennik">
        <div class="tile-label">Cennik</div>
      </a>
    </div>

    <div class="col-12 col-md-4">
      <a href="kontakt/" class="tile">
        <img src="zdjecia/kontakt.jpg" class="tile-img" alt="Kontakt">
        <div class="tile-label">Kontakt</div>
      </a>
    </div>
  </div>
</div>

<?php include 'footer-bar.php'; ?>

</body>
</html>
