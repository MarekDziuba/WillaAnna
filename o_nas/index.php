<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Willa Anna</title>
  <link rel="icon" href="zdjecia/logo_karty.jpg">
  <base href="../">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;1,400;1,600&family=Lora:wght@400;500&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <script async src="cookie-banner.js"></script>
</head>
<body class="bg-white">

<?php include '../menu-bar.php'; ?>

<?php include '../reservation-bar.php'; ?>

<div class="container my-5">
  <div class="row g-0 about-card align-items-stretch">
    <div class="col-12 col-lg-7 py-5 text-start">
      <h1 class="mb-1" style="max-width: 620px;">O nas</h1>
      <p class="mb-0" style="max-width: 620px;">Willa Anna znajduje się w centrum uzdrowiska w pobliżu Parku Kuracyjnego i kompleksu sportowo-rekreacyjnego nad rzeką Wisłą. Jest doskonałą bazą wypadową na szlaki turystyczne; m.in.: Równicę ( 884 m n.p.m.) i Czantorię ( 995 m n.p.m.). W okolicy znajduje się wiele atrakcyjnych miejscowości takich jak Wisła, Szczyrk i miasto graniczne Cieszyn. Miła obsługa, domowa atmosfera – to warunki w których naprawdę można wypocząć. Dysponujemy komfortowymi i przytulnymi pokojami dla 1, 2, 3, osób oraz pokojami rodzinnymi typu 2+2. Wszystkie pokoje posiadają łazienki z prysznicem ( na wyposażeniu suszarki do włosów i mydło w płynie), TV, bezpłatny dostęp do wi-fi, zestawy do kawy/herbaty, kubeczki/szklaneczki itp., większość posiada lodówki typu mini-bar. Naszym Gościom serwujemy smaczne śniadania w formie urozmaiconego bufetu, a na życzenie dodatkowo obiady/obiadokolacje, a także kolacje. W naszym rozległym ogrodzie znajdują się różne urządzenia zabawowe, zorganizowane miejsca do wypoczynku, grill, przechowalnia rowerów. </p>
      <img src="zdjecia/o_nas/booking.png" class="mw-100 mx-auto d-block my-5 mb-5" style="width: 250px; height: 250px;" alt="booking">
      <p class="mb-0 text-center" style="max-width: 520px; font-size: 20px;">Serdecznie dziękujemy Gościom odwiedzającym Willę Anna w Ustroniu za wyrażone uznanie. </p>
    </div>
    <div class="col-12 col-lg-5 pt-5">
      <div class="container text-center my-4">
        <div class="row align-items-end my-4 mt-5">
          <div class="col-4">
            <img src="zdjecia/o_nas/small_1.jpg" class="w-100 d-block"  alt="photo1">
          </div>
          <div class="col-4">
            <img src="zdjecia/o_nas/small_2.jpg" class="w-100 d-block"  alt="photo2">
          </div>
          <div class="col-4">
            <img src="zdjecia/o_nas/small_3.jpg" class="w-100 d-block"  alt="photo3">
          </div>
          <div class="col-12 my-2">
            <img src="zdjecia/o_nas/big_1.jpg" class="w-100 d-block"  alt="photo4">
          </div>
          <div class="col-12 my-2">
          <button type="button" class="rule-btn btn-sm" id="rule">
            Regulamin obiektu
          </button>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  document.getElementById("rule").onclick = function () {
    window.location.href = "regulamin/";
  };
</script>

<?php include '../footer-bar.php'; ?>

</body>
</html>
