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

<div class="container-fluid my-5" style="width: 45%; min-width: 400px;">
	<div class="row g-0 align-items-stretch">
		<div class="col-md-12 offset-md-0">
			<h1 class="mb-0 text-left" style="color: #dbc323">Oferty specjalne</h1>
			<div class="accordion" id="accordionExample">
        <ul class="timeline">
				<li>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_1" aria-expanded="true" aria-controls="collapse_1">
                <span class="offerts-font text-uppercase">Ferrie zimowe</span>
              </button>
            </h2>
            <div id="collapse_1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body p-0">
                
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_2" aria-expanded="false" aria-controls="collapse_2">
                <span class="offerts-font text-uppercase">Wielkanoc</span>
              </button>
            </h2>
            <div id="collapse_2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body p-0">
                <img src="zdjecia/oferty_specjalne/oferta.jpg" class="w-50 d-block" style="min-width: 100%" alt="oferta">              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_3" aria-expanded="false" aria-controls="collapse_3">
                <span class="offerts-font text-uppercase">Majówka</span>
              </button>
            </h2>
            <div id="collapse_3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body p-0">
                
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_4" aria-expanded="false" aria-controls="collapse_4">
                <span class="offerts-font text-uppercase">Wakacje</span>
              </button>
            </h2>
            <div id="collapse_4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body p-0">
                
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_5" aria-expanded="false" aria-controls="collapse_5">
                <span class="offerts-font text-uppercase">Jesień seniora</span>
              </button>
            </h2>
            <div id="collapse_5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body p-0">
                
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_6" aria-expanded="false" aria-controls="collapse_6">
                <span class="offerts-font text-uppercase">Boże narodzenie</span>
              </button>
            </h2>
            <div id="collapse_6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body p-0">
                
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_7" aria-expanded="false" aria-controls="collapse_7">
                <span class="offerts-font text-uppercase">Sylwester</span>
              </button>
            </h2>
            <div id="collapse_7" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body p-0">
                
              </div>
            </div>
          </div>
        </li>
      </div>
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
