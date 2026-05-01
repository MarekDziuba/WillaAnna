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
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
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

<div class="container my-5 width-texts">
  <div class="row g-0 about-card align-items-stretch">
    <h1 class="mb-0 width-texts2 pt-5" style="color: #dbc323;">Pokoje</h1>
    
    <!-- First room -->
    <div class="col-12 col-lg-5 pe-5 py-5 text-start">
      <div id="carouselRoom1" class="carousel slide" data-bs-ride="false">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="zdjecia/pokoje/room1_1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="zdjecia/pokoje/room1_2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="zdjecia/pokoje/room1_3.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="zdjecia/pokoje/room1_4.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselRoom1" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselRoom1" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="room-thumbnails mt-2">
        <img src="zdjecia/pokoje/room1_1.png"
        class="thumb active"
        data-bs-target="#carouselRoom1"
        data-bs-slide-to="0">
        <img src="zdjecia/pokoje/room1_2.png"
        class="thumb"
        data-bs-target="#carouselRoom1"
        data-bs-slide-to="1">
        <img src="zdjecia/pokoje/room1_3.png"
        class="thumb"
        data-bs-target="#carouselRoom1"
        data-bs-slide-to="2">
        <img src="zdjecia/pokoje/room1_4.png"
        class="thumb"
        data-bs-target="#carouselRoom1"
        data-bs-slide-to="3">
      </div>

    </div>
    <div class="col-12 col-lg-7 py-5">
      <h3 class="mb-0 width-texts room-text">Pokój 2-osobowy mały, TYPU <span class="font-bold-blue">DOUBLE z balkonem</span></h3>
      <div class="row">
        <div class="col-md-1">
          <img src="zdjecia/pokoje/ikonki/m2.png" class="d-block" alt="m2"> 
        </div>
        <div class="col-md-11 px-0">
          <p class="mb-0 py-2 width-texts font-bold">12.00m</p>        
        </div>
      </div>
      <p class="mb-0 width-texts">Wyposażenie</p>
    
      <div class="room-equipment ps-2">
        <div class="equip-item">
        <i class="bi bi-laptop"></i> biurko
        </div>

        <div class="equip-item">
        <i class="bi bi-thermometer-half"></i> ogrzewanie
        </div>

        <div class="equip-item">
        <i class="bi bi-basket"></i> ręczniki i pościel
        </div>

        <div class="equip-item">
        <i class="bi bi-wind"></i> suszarka do włosów
        </div>

        <div class="equip-item">
        <i class="bi bi-door-open"></i> szafa lub garderoba
        </div>

        <div class="equip-item">
        <i class="bi bi-tv"></i> TV
        </div>

        <div class="equip-item">
        <i class="bi bi-wifi"></i> Wi-Fi
        </div>

        <div class="equip-item">
        <i class="bi bi-cup-hot"></i> zestaw do kawy i herbaty
        </div>

        <div class="equip-item">
        <img src="zdjecia/pokoje/ikonki/prysznic.png" class="d-block" style="width: 20px;" alt="m2"> łazienka
        </div>

      </div>
    </div>

    <!-- Second room -->
    <div class="col-12 col-lg-5 pe-5 py-5 text-start">
      <div id="carouselRoom2" class="carousel slide" data-bs-ride="false">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="zdjecia/pokoje/room2_1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="zdjecia/pokoje/room2_2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="zdjecia/pokoje/room2_3.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselRoom2" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselRoom2" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="room-thumbnails mt-2">
        <img src="zdjecia/pokoje/room2_1.png"
        class="thumb active"
        data-bs-target="#carouselRoom2"
        data-bs-slide-to="0">
        <img src="zdjecia/pokoje/room2_2.png"
        class="thumb"
        data-bs-target="#carouselRoom2"
        data-bs-slide-to="1">
        <img src="zdjecia/pokoje/room2_3.png"
        class="thumb"
        data-bs-target="#carouselRoom2"
        data-bs-slide-to="2">
      </div>

    </div>
    <div class="col-12 col-lg-7 py-5">
      <h3 class="mb-0 width-texts room-text">Pokój 1-osobowy , TYPU <span class="font-bold-blue">Standard</span></h3>
      <div class="row">
        <div class="col-md-1">
          <img src="zdjecia/pokoje/ikonki/m2.png" class="d-block" alt="m2"> 
        </div>
        <div class="col-md-11 px-0">
          <p class="mb-0 py-2 width-texts font-bold">11.00m</p>        
        </div>
      </div>
      <p class="mb-0 width-texts">Wyposażenie</p>
    
      <div class="room-equipment ps-2">

        <div class="equip-item">
        <i class="bi bi-thermometer-half"></i> ogrzewanie
        </div>

        <div class="equip-item">
        <i class="bi bi-basket"></i> ręczniki i pościel
        </div>

        <div class="equip-item">
        <i class="bi bi-wind"></i> suszarka do włosów
        </div>

        <div class="equip-item">
        <i class="bi bi-door-open"></i> szafa lub garderoba
        </div>

        <div class="equip-item">
        <i class="bi bi-tv"></i> TV
        </div>

        <div class="equip-item">
        <i class="bi bi-wifi"></i> Wi-Fi
        </div>

        <div class="equip-item">
        <i class="bi bi-cup-hot"></i> zestaw do kawy i herbaty
        </div>

        <div class="equip-item">
        <img src="zdjecia/pokoje/ikonki/prysznic.png" class="d-block" style="width: 20px;" alt="m2"> łazienka
        </div>

      </div>
    </div>

    <!-- Third room -->
    <div class="col-12 col-lg-5 pe-5 py-5 text-start">
      <div id="carouselRoom3" class="carousel slide" data-bs-ride="false">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="zdjecia/pokoje/room3_1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="zdjecia/pokoje/room3_2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="zdjecia/pokoje/room3_3.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="zdjecia/pokoje/room3_4.png" class="d-block w-100" alt="...">
          </div>
          
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselRoom3" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselRoom3" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="room-thumbnails mt-2">
        <img src="zdjecia/pokoje/room3_1.png"
        class="thumb active"
        data-bs-target="#carouselRoom3"
        data-bs-slide-to="0">
        <img src="zdjecia/pokoje/room3_2.png"
        class="thumb"
        data-bs-target="#carouselRoom3"
        data-bs-slide-to="1">
        <img src="zdjecia/pokoje/room3_3.png"
        class="thumb"
        data-bs-target="#carouselRoom3"
        data-bs-slide-to="2">
        <img src="zdjecia/pokoje/room3_4.png"
        class="thumb"
        data-bs-target="#carouselRoom3"
        data-bs-slide-to="3">
      </div>

    </div>
    <div class="col-12 col-lg-7 py-5">
      <h3 class="mb-0 width-texts room-text">Pokój 2-osobowy standardowy , TYPU <span class="font-bold-blue">TWIN/DOUBLE</span></h3>
      <div class="row">
        <div class="col-md-1">
          <img src="zdjecia/pokoje/ikonki/m2.png" class="d-block" alt="m2"> 
        </div>
        <div class="col-md-11 px-0">
          <p class="mb-0 py-2 width-texts font-bold">14.00m</p>        
        </div>
      </div>
      <p class="mb-0 width-texts">Wyposażenie</p>
    
      <div class="room-equipment ps-2">
        <div class="equip-item">
        <i class="bi bi-laptop"></i> biurko
        </div>

        <div class="equip-item">
        <i class="bi bi-thermometer-half"></i> ogrzewanie
        </div>

        <div class="equip-item">
        <i class="bi bi-basket"></i> ręczniki i pościel
        </div>

        <div class="equip-item">
        <i class="bi bi-wind"></i> suszarka do włosów
        </div>

        <div class="equip-item">
        <i class="bi bi-door-open"></i> szafa lub garderoba
        </div>

        <div class="equip-item">
        <i class="bi bi-tv"></i> TV
        </div>

        <div class="equip-item">
        <i class="bi bi-wifi"></i> Wi-Fi
        </div>

        <div class="equip-item">
        <i class="bi bi-cup-hot"></i> zestaw do kawy i herbaty
        </div>

        <div class="equip-item">
        <img src="zdjecia/pokoje/ikonki/prysznic.png" class="d-block" style="width: 20px;" alt="m2"> łazienka
        </div>

      </div>
    </div>
    
    <!-- Forth room -->
    <div class="col-12 col-lg-5 pe-5 py-5 text-start">
      <div id="carouselRoom4" class="carousel slide" data-bs-ride="false">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="zdjecia/pokoje/room4_1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="zdjecia/pokoje/room4_2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="zdjecia/pokoje/room4_3.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="zdjecia/pokoje/room4_4.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselRoom4" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselRoom4" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="room-thumbnails mt-2">
        <img src="zdjecia/pokoje/room4_1.png"
        class="thumb active"
        data-bs-target="#carouselRoom4"
        data-bs-slide-to="0">
        <img src="zdjecia/pokoje/room4_2.png"
        class="thumb"
        data-bs-target="#carouselRoom4"
        data-bs-slide-to="1">
        <img src="zdjecia/pokoje/room4_3.png"
        class="thumb"
        data-bs-target="#carouselRoom4"
        data-bs-slide-to="2">
        <img src="zdjecia/pokoje/room4_4.png"
        class="thumb"
        data-bs-target="#carouselRoom4"
        data-bs-slide-to="3">
      </div>

    </div>
    <div class="col-12 col-lg-7 py-5">
      <h3 class="mb-0 width-texts room-text">Pokój 3-osobowy, TYPU <span class="font-bold-blue">TWIN/DOUBLE</span></h3>
      <div class="row">
        <div class="col-md-1">
          <img src="zdjecia/pokoje/ikonki/m2.png" class="d-block" alt="m2"> 
        </div>
        <div class="col-md-11 px-0">
          <p class="mb-0 py-2 width-texts font-bold">17.00m</p>        
        </div>
      </div>
      <p class="mb-0 width-texts">Wyposażenie</p>
    
      <div class="room-equipment ps-2">
        <div class="equip-item">
        <i class="bi bi-laptop"></i> biurko
        </div>

        <div class="equip-item">
        <i class="bi bi-snow"></i> lodówka typu mini
        </div>

        <div class="equip-item">
        <i class="bi bi-thermometer-half"></i> ogrzewanie
        </div>

        <div class="equip-item">
        <i class="bi bi-basket"></i> ręczniki i pościel
        </div>

        <div class="equip-item">
        <i class="bi bi-displayport-fill"></i> sofa (140x190)
        </div>

        <div class="equip-item">
        <i class="bi bi-wind"></i> suszarka do włosów
        </div>

        <div class="equip-item">
        <i class="bi bi-door-open"></i> szafa lub garderoba
        </div>

        <div class="equip-item">
        <i class="bi bi-tv"></i> TV
        </div>

        <div class="equip-item">
        <i class="bi bi-wifi"></i> Wi-Fi
        </div>

        <div class="equip-item">
        <i class="bi bi-cup-hot"></i> zestaw do kawy i herbaty
        </div>

        <div class="equip-item">
        <img src="zdjecia/pokoje/ikonki/prysznic.png" class="d-block" style="width: 20px;" alt="m2"> łazienka
        </div>

      </div>
    </div>

    <!-- Fifth room -->
    <div class="col-12 col-lg-5 pe-5 py-5 text-start">
      <div id="carouselRoom5" class="carousel slide" data-bs-ride="false">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="zdjecia/pokoje/room5_1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="zdjecia/pokoje/room5_2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="zdjecia/pokoje/room5_3.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="zdjecia/pokoje/room5_4.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselRoom5" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselRoom5" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="room-thumbnails mt-2">
        <img src="zdjecia/pokoje/room5_1.png"
        class="thumb active"
        data-bs-target="#carouselRoom5"
        data-bs-slide-to="0">
        <img src="zdjecia/pokoje/room5_2.png"
        class="thumb"
        data-bs-target="#carouselRoom5"
        data-bs-slide-to="1">
        <img src="zdjecia/pokoje/room5_3.png"
        class="thumb"
        data-bs-target="#carouselRoom5"
        data-bs-slide-to="2">
        <img src="zdjecia/pokoje/room5_4.png"
        class="thumb"
        data-bs-target="#carouselRoom5"
        data-bs-slide-to="3">
      </div>

    </div>
    <div class="col-12 col-lg-7 py-5">
      <h3 class="mb-0 width-texts room-text">Pokój Rodzinny , TYPU <span class="font-bold-blue">TWIN/DOUBLE</span></h3>
      <div class="row">
        <div class="col-md-1">
          <img src="zdjecia/pokoje/ikonki/m2.png" class="d-block" alt="m2"> 
        </div>
        <div class="col-md-11 px-0">
          <p class="mb-0 py-2 width-texts font-bold">17.00m</p>        
        </div>
      </div>
      <p class="mb-0 width-texts">Wyposażenie</p>
    
      <div class="room-equipment ps-2">
        <div class="equip-item">
        <i class="bi bi-laptop"></i> biurko
        </div>

        <div class="equip-item">
        <i class="bi bi-snow"></i> lodówka typu mini
        </div>

        <div class="equip-item">
        <i class="bi bi-thermometer-half"></i> ogrzewanie
        </div>

        <div class="equip-item">
        <i class="bi bi-basket"></i> ręczniki i pościel
        </div>

        <div class="equip-item">
        <i class="bi bi-displayport-fill"></i> sofa (140x190)
        </div>

        <div class="equip-item">
        <i class="bi bi-wind"></i> suszarka do włosów
        </div>

        <div class="equip-item">
        <i class="bi bi-door-open"></i> szafa lub garderoba
        </div>

        <div class="equip-item">
        <i class="bi bi-tv"></i> TV
        </div>

        <div class="equip-item">
        <i class="bi bi-wifi"></i> Wi-Fi
        </div>

        <div class="equip-item">
        <i class="bi bi-cup-hot"></i> zestaw do kawy i herbaty
        </div>

        <div class="equip-item">
        <img src="zdjecia/pokoje/ikonki/prysznic.png" class="d-block" style="width: 20px;" alt="m2"> łazienka
        </div>

      </div>
    </div>


  </div>
</div>

<?php include '../footer-bar.php'; ?>

<script>
document.querySelectorAll('.carousel').forEach(carousel => {
  carousel.addEventListener('slid.bs.carousel', function (event) {
    const thumbsContainer = carousel.parentElement.querySelector('.room-thumbnails')
    if(!thumbsContainer) return
    const thumbs = thumbsContainer.querySelectorAll('.thumb')
    thumbs.forEach(t => t.classList.remove('active'))
    if(thumbs[event.to]){
      thumbs[event.to].classList.add('active')
    }
  })
})

</script>

</body>
</html>
