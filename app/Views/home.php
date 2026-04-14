<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fananda Collaborative</title>

  <!-- Fav Icon -->
  <link rel="shortcut icon" href="assets/icon/fananda-v2.png" type="image/x-icon" />

  <!-- Bootstrap5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Bootstrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

  <!-- Font Poppins -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />

  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
    <div class="container">
      <div class="logo mt-2">
        <img src="assets/icon/fananda-v2.png" alt="">
        <a href="https://fanandapage.netlify.app/" target="_blank">
          <h3 class="fw-semibold mt-2">Fananda.</h3>
        </a>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active fw-semibold fs-5" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-semibold fs-5" href="#tentang">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-semibold fs-5" href="#collaborations">Collaborations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-semibold fs-5" href="#profile">Profile</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->

  <!-- Hero -->
  <div class="hero">
    <div class="container">
      <div class="hero-box">
        <h1 id="welcome"></h1>
        <p id="hero_paragraf"></p>
        <div class="button flex-column flex-sm-row">
          <a href="#collaborations" class="btn btn-warning fw-bold lihat-collabolator rounded-pill">Lihat
            Collabolator</a>
          <a href="http://instagram.com/fanandacollaborative" target="_blank"
            class="btn btn-outline-light fw-bold lihat-collabolator rounded-pill ms-2"><i class="bi bi-instagram"></i>
            Instagram</a>
        </div>
      </div>
    </div>
  </div>
  <!-- End Hero -->

  <!-- Tentang kami -->
  <div class="tentang" id="tentang">
    <div class="container">
      <div class="tentang-box">
        <div class="box">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
              <!-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button> -->
            </div>
            <div class="carousel-inner" id="carousel"></div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon bg-warning rounded-circle" aria-hidden="false"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
              data-bs-slide="next">
              <span class="carousel-control-next-icon bg-warning rounded-circle" aria-hidden="false"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>

        <div class="box">
          <h1 class="fw-semibold">About Us</h1>
          <p id="about_paragraf"></p>
        </div>
      </div>
    </div>
  </div>
  <!-- End Tentang kami -->

  <!-- Collaborations -->
  <div id="collaborations">
    <div class="container ">
      <h1 class="fw-semibold">Collaborations</h1>
      <div class="collabolator" id="collab"></div>
      <div class="detail" id="detail"></div>
    </div>
  </div>
  <!-- End Collaborations -->

  <!-- Profile -->
  <div id="profile">
    <div class="container">
      <h1 class="fw-semibold text-profile mt-5">Profile</h1>
      <div class="row text-center gap-5 p" id="page">
      </div>
    </div>
  </div>
  <!-- End Profile -->

  <!-- Footer -->
  <div class="footer">
    <div class="container">
      <div class="row row-cols-lg-3 row-cols-1 justify-content-between pt-5">
        <div class="col col-lg-6 mb-lg-0 mb-4">
          <h2 class="fw-bold mb-3 text-white">Fananda</h2>
          <p class="mt-3 text-white-50 text-decoration-none">Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Optio facilis fuga quod
            dolor
            iure
            rerum
            similique laborum doloribus dignissimos corrupti.</p>
        </div>
        <div class="col d-flex flex-column col-lg-2 mb-lg-0 mb-4">
          <h5 class="fw-bold mb-3 text-white">Menu</h5>
          <a href="#" class="mt-2 text-white-50 text-decoration-none">Home</a>
          <a href="#tentang" class="mt-2 text-white-50 text-decoration-none">About Us</a>
          <a href="#collaborations" class="mt-2 text-white-50 text-decoration-none">Collaborations</a>
        </div>
        <div class="col d-flex flex-column col-lg-3">
          <h5 class="fw-bold mb-3 text-white">Contact</h5>
          <a href="http://instagram.com/fanandacollaborative" target="_blank"
            class="text-decoration-none mt-2 text-fananda"><i class="bi bi-instagram text-white-50"></i>
            fanandacollaborative</a>
          <a href="http://instagram.com/dhevvlabel" target="_blank" class="text-decoration-none mt-2 text-dhevv"><i
              class="bi bi-instagram text-white-50"></i>
            dhevvlabel</a>
          <a href="http://instagram.com/lafern.co" target="_blank" class="text-decoration-none text-lafern mt-2"><i
              class="bi bi-instagram text-white-50"></i> lafern.co</a>
          <a href="http://instagram.com/vousa_official" target="_blank" class="text-decoration-none text-vousa mt-2"><i
              class="bi bi-instagram text-white-50"></i> vousa_official</a>
        </div>
      </div>
      <div class=" row">
        <div class="col">
          <p class="text-center copyright text-white"><i class="fa-regular fa-copyright"></i> Copyright 2025 by Fananda
            Collaborative</p>
        </div>
      </div>
    </div>
  </div>
  <!-- End Footer -->

  <!-- Product Modal -->
  <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content bg-tes">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <img id="modalImg" src="" alt="" class="img-fluid rounded">
            </div>
            <div class="col-md-6">
              <h2 id="modalName" class="fw-bold"></h2>
              <p id="modalDesc"></p>
              <h4 id="modalPriceCut" class="text-black mt-4 coret"></h4>
              <h4 id="modalPrice" class="text-danger mt-4"></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Product Modal -->

  <!-- js -->
  <script type="module" src="<?= base_url('assets/js/main.js') ?>"></script>

  <!-- bootstrap js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>