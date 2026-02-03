<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <title>Home</title>
</head>
<body>
  

<nav class="navbar navbar-expand-lg" style="background-color: ;" data-bs-theme="light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img class="img1" src="logo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="option.php">OPTION</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <button class="btn btn-light me-2" type="submit"><a href="correction.php">Correction</a></button>
        <button class="btn btn-dark" type="submit"> <a href="student.php">LOGIN </a>
      </form>
    </div>
  </div>
</nav>

<main>
  <section>
    <div id="carouselExampleDark" class="carousel carousel-dark slide gradient-overlay"
    style="background-color:#26658c; ">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item  active" data-bs-interval="10000">
      <img src="homepag.jpeg" class="home" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="display-3 fw-bold mb-4">LOOKING FOR <br>HND PAST QUESTIONS <br> AND ANSWERS?</h1>
      </div>
      <div class="overlay"></div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="homepag.jpeg" class="home" alt="...">
      <div class="carousel-caption d-none d-md-block">
          <h1 class="display-3 fw-bold mb-4">LOOKING FOR <br> HND PAST QUESTIONS <br> AND ANSWERS?</h1>
      </div>
      <div class="overlay"></div>
    </div>
    <div class="carousel-item">
      <img src="homepag.jpeg" class="home" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="display-3 fw-bold mb-4">LOOKING FOR <br> HND PAST QUESTIONS <br> AND ANSWERS?</h1>
      </div>
    </div>
    <div class="overlay"></div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="row row-cols-1 row-cols-md-3 g-4  p-5">

  <div class="col">
    <div class="card h-100">

      <div class="card-body">
        <h5 class="card-title">Past Papers & Answers</h5>
        <p class="card-text">All Hnd Past Questions and Answers are available for free+++</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      
      <div class="card-body">
        <h5 class="card-title">Search</h5>
        <p class="card-text">Don't waste anymore time searching through piles of papaers- use our search and filter options to quickly find the resources you need </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      
      <div class="card-body">
        <h5 class="card-title">Merge & Bundle</h5>
        <p class="card-text">Combine multiple past papers and solutions into one organized download</p>
      </div>
    </div>
  </div>
</div>
  </section>
  
</main>
<footer>
  <div class="bg-dark">
    <p class="text-center text-light">All rights reserved &copy||2025</p>
  </div>
</footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>