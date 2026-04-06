<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Willa Anna</title>
  <base href="../">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;1,400;1,600&family=Lora:wght@400;500&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body class="bg-white">

<?php include '../menu-bar.php'; ?>

<?php include '../reservation-bar.php'; ?>

<div class="container my-5 width-texts">
  <div class="row g-0 about-card align-items-stretch">
    <h1 class="mb-0 width-texts2 pt-5" style="color: #dbc323;">Galeria</h1>
    
    <p class="text-muted mb-4">Zapraszamy do obejrzenia naszej willi</p>

<!-- ===== KARUZELA 1 ===== -->

<div class="gallery-wrapper position-relative mb-5">

<button class="gallery-arrow left" onclick="scrollGallery('gallery1', -1)">
<i class="bi bi-chevron-left"></i>
</button>

<div class="gallery-scroll" id="gallery1">

<img src="zdjecia/galeria/carousel1_1.jpg" class="gallery-img" onclick="openImage(this)">
<img src="zdjecia/galeria/carousel1_1.jpg" class="gallery-img" onclick="openImage(this)">
<img src="zdjecia/galeria/carousel1_1.jpg" class="gallery-img" onclick="openImage(this)">
<img src="zdjecia/galeria/carousel1_1.jpg" class="gallery-img" onclick="openImage(this)">
<img src="zdjecia/galeria/carousel1_1.jpg" class="gallery-img" onclick="openImage(this)">
<img src="zdjecia/galeria/carousel1_1.jpg" class="gallery-img" onclick="openImage(this)">
<img src="zdjecia/galeria/carousel1_1.jpg" class="gallery-img" onclick="openImage(this)">
<img src="zdjecia/galeria/carousel1_1.jpg" class="gallery-img" onclick="openImage(this)">
<img src="zdjecia/galeria/carousel1_1.jpg" class="gallery-img" onclick="openImage(this)">
<img src="zdjecia/galeria/carousel1_1.jpg" class="gallery-img" onclick="openImage(this)">

</div>

<button class="gallery-arrow right" onclick="scrollGallery('gallery1', 1)">
<i class="bi bi-chevron-right"></i>
</button>

</div>


<!-- ===== KARUZELA 2 ===== -->

<div class="gallery-wrapper position-relative">

<button class="gallery-arrow left" onclick="scrollGallery('gallery2', -1)">
<i class="bi bi-chevron-left"></i>
</button>

<div class="gallery-scroll" id="gallery2">

<img src="zdjecia/galeria/carousel1_1.jpg" class="gallery-img" onclick="openImage(this)">
<img src="zdjecia/galeria/carousel1_1.jpg" class="gallery-img" onclick="openImage(this)">
<img src="zdjecia/galeria/carousel1_1.jpg" class="gallery-img" onclick="openImage(this)">
<img src="zdjecia/galeria/carousel1_1.jpg" class="gallery-img" onclick="openImage(this)">
<img src="zdjecia/galeria/carousel1_1.jpg" class="gallery-img" onclick="openImage(this)">
<img src="zdjecia/galeria/carousel1_1.jpg" class="gallery-img" onclick="openImage(this)">
<img src="zdjecia/galeria/carousel1_1.jpg" class="gallery-img" onclick="openImage(this)">
<img src="zdjecia/galeria/carousel1_1.jpg" class="gallery-img" onclick="openImage(this)">
<img src="zdjecia/galeria/carousel1_1.jpg" class="gallery-img" onclick="openImage(this)">
<img src="zdjecia/galeria/carousel1_1.jpg" class="gallery-img" onclick="openImage(this)">

</div>

<button class="gallery-arrow right" onclick="scrollGallery('gallery2', 1)">
<i class="bi bi-chevron-right"></i>
</button>

</div>


<!-- ===== MODAL (powiększenie zdjęcia) ===== -->

<div class="modal fade" id="imageModal" tabindex="-1">
<div class="modal-dialog modal-xl modal-dialog-centered">
<div class="modal-content bg-transparent border-0">

<button class="btn-close btn-close-white ms-auto me-2 mt-2" data-bs-dismiss="modal"></button>

<img id="modalImage" class="w-100 rounded">

</div>
</div>
</div>
    

  </div>    
</div>


<?php include '../footer-bar.php'; ?>


<script>
function scrollGallery(id, direction){
const gallery = document.getElementById(id)
const imgWidth = gallery.querySelector("img").clientWidth + 10
gallery.scrollBy({
left: imgWidth * direction,
behavior: "smooth"
})
}
function openImage(img){
const modalImg = document.getElementById("modalImage")
modalImg.src = img.src
const modal = new bootstrap.Modal(document.getElementById("imageModal"))
modal.show()
}

</script>

</body>
</html>
