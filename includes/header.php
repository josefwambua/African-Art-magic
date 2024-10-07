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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">

    <link rel="stylesheet" type="text/css" href="rating-plugin/src/css/star-rating-svg.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css
      " rel="stylesheet">
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


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
   <a class="nav-link active" aria-current="page" href="index.php">Art Gallery</a>
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

