<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Willa Anna</title>
  <base href="../">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;1,400;1,600&family=Lora:wght@400;500&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body class="bg-white">

<?php include '../menu-bar.php'; ?>

<?php include '../reservation-bar.php'; ?>

<div class="container my-5">
  <div class="row g-0 about-card align-items-stretch ">
    
    <h3 class="mb-0 width-texts2 pt-4" style="color: #dbc323">Jesień seniorów</h3>
    <div class="col-12 my-2 p-0">
      <button type="button" class="rule-btn-more btn-sm">
        CZYTAJ WIĘCEJ
      </button>
    </div>

    <h3 class="mb-0 width-texts2 pt-4" style="color: #dbc323">Majówka</h3>
    <div class="col-12 my-2">
      <button type="button" class="rule-btn-more btn-sm">
        CZYTAJ WIĘCEJ
      </button>
    </div>

    <h3 class="mb-0 width-texts2 pt-4" style="color: #dbc323">Wakacje</h3>
    <div class="col-12 my-2">
      <button type="button" class="rule-btn-more btn-sm">
        CZYTAJ WIĘCEJ
      </button>
    </div>

    <h3 class="mb-0 width-texts2 pt-4" style="color: #dbc323">Ferie zimowe</h3>
    <div class="col-12 my-2">
      <button type="button" class="rule-btn-more btn-sm">
        CZYTAJ WIĘCEJ
      </button>
    </div>

    <h3 class="mb-0 width-texts2 pt-4" style="color: #dbc323">Wielkanoc</h3>
    <p class="mb-0 width-texts2">ZAPRASZAMY DO REZERWACJI ZASADY REZERWACJI I PŁATNOŚCI Po dokonaniu rezerwacji, wymagana jest wpłata zadatku (bezzwrotnego) w wysokości 40% wartości pobytu,w terminie 3 dni od momentu rezerwacji. Pozostała należność rezerwacji, pobierana jest w dniu przyjazdu podczas zameldowania.Cena: 400 zł/osobę, obowiązuje do 7.04. 2026 przy pobycie min. 3 dni. (Dziecko do lat 10- zniżka 50%) INFORMACJE OGÓLNE Dodatkową opłatą jest opłata uzdrowiskowa Miasta Ustroń w wysokości 6,3 zł/doba/osoba dorosła i dziecko Doba hotelowa zaczyna się o godz. 14:00, a kończy o godz. 11:00 Pierwszym świadczeniem jest obiad w dniu przyjazdu, ostatnim śniadanie w dniu wyjazdu.</p>
    <div class="col-12 my-2">
      <button type="button" class="rule-btn-more btn-sm" id="wielkanoc">
        CZYTAJ WIĘCEJ
      </button>
    </div>

    <h3 class="mb-0 width-texts2 pt-4" style="color: #dbc323">Boże Narodzenie</h3>
    <div class="col-12 my-2">
      <button type="button" class="rule-btn-more btn-sm">
        CZYTAJ WIĘCEJ
      </button>
    </div>

    <h3 class="mb-0 width-texts2 pt-4" style="color: #dbc323">Voucher</h3>
    <p class="mb-0 width-texts2">Voucher Willi Anna to idealny prezent dla każdego i na każdą okazję.</p>
    <div class="col-12 my-2">
      <button type="button" class="rule-btn-more btn-sm">
        CZYTAJ WIĘCEJ
      </button>
    </div>

  </div>
</div>

<?php include '../footer-bar.php'; ?>

<script>
  document.getElementById("wielkanoc").onclick = function () {
    window.location.href = "oferty/index-backup.php";
  };
</script>

</body>
</html>
