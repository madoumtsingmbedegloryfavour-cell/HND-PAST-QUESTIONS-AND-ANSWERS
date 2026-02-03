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
  
<header>
  
</header>
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
        <button class=" btn btn-light me-2" type="submit"><a href="correction.php">Correction</a></button>
        <button class="btn btn-dark" type="submit"><a href="student.php">LOGIN</a></button>
      </form>
    </div>
  </div>
</nav>
<main>
    <section id="option">
        <p class="option">CHOOSE YOUR SPECIALITY WITHOUT DOUBTS</p>
<div id="cool" class="row row-cols-1 row-cols-md-3 g-4 p-3">
  <div class="cole">
    <div class="card h-100">
      <a href="software.php"><img src="software.jpeg" class="card-img-top" alt="..."></a>
      
    </div>
  </div>
  <div class="cole">
    <div class="card h-100">
      <a href="network.php"><img src="network1.jpeg" class="card-img-top" alt="..."></a>
      
    </div>
  </div>
  <div class="cole">
    <div class="card h-100">
      <a href="database.php"><img src="database.jpeg" class="card-img-top" alt="..."></a>
     
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