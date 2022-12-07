<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" href="assets/bootstrap-5.0.2css.min.css">
  <link rel="stylesheet" href="assets/fontawesome-free-5.15.4-web/css/all.min.css">
  <link rel="stylesheet" href="catering.css">

  <link rel="shortcut icon" href="catering.png">
  <link rel="apple-touch-icon" href="catering.png">
  <title>Online Catering System</title>
</head>

<body>
  <header>
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
      <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
          <a href="#" class="list-group-item list-group-item-action py-2 ripple active" aria-current="true">
            <i class="fas fa-star fa-fw me-3"></i><span>Starters</span>
          </a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple">
            <i class="fas fa-archive fa-fw me-3"></i><span>Packages</span>
          </a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
              class="fas fa-wine-glass-alt fa-fw me-3"></i><span>Drinks</span></a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
              class="fas fa-cookie-bite fa-fw me-3"></i><span>Sweets</span></a>
        </div>
      </div>
    </nav>
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
          aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <a class="navbar-brand" href="#">
          <img src="catering.png" height="50" alt="" loading="lazy" />
        </a>
        <form class="d-none d-md-flex input-group w-auto my-auto">
          <input autocomplete="off" type="search" class="form-control" placeholder='Search packages...'
            style="min-width: 500px" />
          <span class="input-group-text"><i class="fas fa-search"></i></span>
        </form>
        <ul class="navbar-nav ms-auto d-flex flex-row">
          <li class="nav-item">
            <a class="nav-link me-3 me-lg-0" href="#">
              Menu
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-3 me-lg-0" href="#">
              Orders
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#"
              id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
              <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="rounded-circle" height="22"
                alt="" loading="lazy" />
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">My profile</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <main style="margin-top: 58px">
    <div class="container pt-4">
      <div class="card-group">
        <div class="card">
          <img src="https://source.unsplash.com/1080x700?food" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Sweet Bundle</h5>
            <p class="card-text">comming soon</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img src="https://source.unsplash.com/1080x700?food" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Happy Pack</h5>
            <p class="card-text">comming soon</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img src="https://source.unsplash.com/1080x700?food" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Big Muck</h5>
            <p class="card-text">comming soon</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="card-group">
        <div class="card">
          <img src="https://source.unsplash.com/1080x700?food" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Happy Meal</h5>
            <p class="card-text">comming soon</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img src="https://source.unsplash.com/1080x700?food" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Saver Pack</h5>
            <p class="card-text">comming soon</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img src="https://source.unsplash.com/1080x700?food" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Birthday Bundle</h5>
            <p class="card-text">comming soon</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="card-group">
        <div class="card">
          <img src="https://source.unsplash.com/1080x700?food" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Weeding Bundle</h5>
            <p class="card-text">comming soon</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img src="https://source.unsplash.com/1080x700?food" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Saver Pack 2</h5>
            <p class="card-text">comming soon</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img src="https://source.unsplash.com/1080x700?food" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Birthday Bundle 2</h5>
            <p class="card-text">comming soon</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="assets/bootstrap-5.0.2js.min.js"></script>
  <script src="catering.js"></script>

</body>

</html>