<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
  <header class="p-3 text-bg-dark mb-3 border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 nav-link text-white link-secondary">Overview</a></li>
          <li><a href="#" class="nav-link px-2 text-white link-body-emphasis">Inventory</a></li>
          <li><a href="#" class="nav-link px-2 text-white link-body-emphasis">Customers</a></li>
          <li><a href="#" class="nav-link px-2 text-white link-body-emphasis">Products</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>
        <?php
        if (!isset($_SESSION['user'])){
            ?>
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="connexion.php" class="nav-link px-2 nav-link text-white link-secondary">Log in</a></li>
                <li><a href="inscription.php" class="nav-link px-2 text-white link-body-emphasis">Sign in</a></li> 
            </ul>
            <?php
        }
        ?>
        <?php
        if (isset($_SESSION['user'])){
        ?>
        <div class="dropdown text-end">
          <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small">
            <?php
            if (isset($_SESSION['user'])){
                echo  $_SESSION['user'];
            }
            ?>
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
          </ul>
        </div>
        <?php
        }
        ?>

      </div>
    </div>
  </header>
  <div class="container">
