<?php

session_start();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>African Art Magic</title>
    <link rel="stylesheet" href="css/styles.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">

    <link rel="stylesheet" type="text/css" href="rating-plugin/src/css/star-rating-svg.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css
      " rel="stylesheet">


      <meta name="theme-color" content="#712cf9">

<nav class="navbar navbar-expand-lg custom-bg">
  <div class="container">
    <a class="navbar-brand" href="index.php">African Art Magic</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">


      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
   <a class="nav-link active" aria-current="page" href="gallery.php">Art Gallery</a>
 </li>
 <li class="nav-item">
   <a class="nav-link " aria-current="page" href="products.php"> Products</a>
 </li>
 <li class="nav-item">
   <a class="nav-link " aria-current="page" href="artists.php">Artists</a>
 </li>
 <li class="nav-item">
   <a class="nav-link " aria-current="page" href="about.php">About</a>
 </li>
 <li class="nav-item">
   <a class="nav-link " aria-current="page" href="contact.php">Contact</a>
 </li>
        <?php if (!isset($_SESSION['username'])): ?>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php">Register</a>
          </li>
        <?php else: ?>
          <li class="nav-item">
          <a class="nav-link" href="create.php">Create</a>

          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $_SESSION['username']; ?>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="logout.php">Logout</a></li>

            </ul>
          </li>
        <?php endif;?>

      </ul>
    </div>
  </div>
</nav>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" >
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner custom ">
    <div class="carousel-item active c-item">
      <img src="images/caro2.jpg" class="d-block w-100 c-img" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Explore Excellent Extinct African Art</h5>
        <p>We deliver high quality profile extint Art made by african professsional artists</p>
      </div>
    </div>
    <div class="carousel-item c-item">
      <img src="images/caro1.jpg" class="d-block w-100 c-img" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Undefiable Art</h5>
        <p>Where Art meets magic</p>
      </div>
    </div>
    <div class="carousel-item c-item">
      <img src="images/caro3.jpg" class="d-block w-100 c-img"  alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Africas best Art</h5>
        <p>Exclusive arts made from Africa</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
