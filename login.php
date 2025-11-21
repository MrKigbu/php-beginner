<?php 
session_start();
require "inc/header.php";
?>

<div class="container">

<?php
require './pages/header-home.php';
include 'inc/process.php';
?>

<div class="row py-4">

    <!-- CAROUSEL (LEFT SIDE - col-9) -->
    <div class="col-md-9">
  <div id="carouselExampleDark" class="carousel carousel-dark slide carousel-fade custom-carousel" data-bs-ride="carousel">
      
      <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5"></button>
      </div>

      <div class="carousel-inner">

          <div class="carousel-item active" data-bs-interval="4000">
              <div class="overlay"></div>
              <img src="uploads/dog-4897327_1280.jpg" class="d-block w-100 carousel-img">
              <div class="carousel-caption">
                  <h5>Welcome Back</h5>
                  <p>Sign in to continue your journey.</p>
              </div>
          </div>

          <div class="carousel-item" data-bs-interval="4000">
              <div class="overlay"></div>
              <img src="uploads/new-years-eve-1283521_1280.jpg" class="d-block w-100 carousel-img">
              <div class="carousel-caption">
                  <h5>Grow With Us</h5>
                  <p>Access your dashboard and explore more tools.</p>
              </div>
          </div>

          <div class="carousel-item">
              <div class="overlay"></div>
              <img src="uploads/prayer-1308663_1280.jpg" class="d-block w-100 carousel-img">
              <div class="carousel-caption">
                  <h5>Stay Connected</h5>
                  <p>Engage and share your ideas freely.</p>
              </div>
          </div>

          <div class="carousel-item">
              <div class="overlay"></div>
              <img src="uploads/room-1336497_1280.jpg" class="d-block w-100 carousel-img">
              <div class="carousel-caption">
                  <h5>Connect With Us</h5>
                  <p>Login your dashboard</p>
              </div>
          </div>

          <div class="carousel-item">
              <div class="overlay"></div>
              <img src="uploads/workplace-5517762_1280.jpg" class="d-block w-100 carousel-img">
              <div class="carousel-caption">
                  <h5>You are in the right place</h5>
                  <p>With one access, explore endless opportunities.</p>
              </div>
          </div>

          <div class="carousel-item">
              <div class="overlay"></div>
              <img src="uploads/positive-4907261_1280.jpg" class="d-block w-100 carousel-img">
              <div class="carousel-caption">
                  <h5>Grow With Us</h5>
                  <p>You won't regret this</p>
              </div>
          </div>

      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
      </button>

      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
      </button>

  </div>
</div>


    <!-- LOGIN FORM (RIGHT SIDE - col-3) -->
    <div class="col-md-3 d-flex align-items-center">

        <form action="" method="POST" class="w-100">
            <h4 class="text-center mb-3">Login</h4>

            <?php if(isset($error)) { ?>
                <div class="alert alert-danger"><strong><?= $error ?></strong></div>
            <?php } elseif(isset($success)) { ?>
                <div class="alert alert-success"><strong><?= $success ?></strong></div>
            <?php } ?>

            <div class="form-group py-1">
                <label>Email</label>
                <input type="email" name="email" placeholder="Enter your email" class="form-control">
            </div>

            <div class="form-group py-1">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter your password" class="form-control">
            </div>

            <hr>

            <p>
                New user? <a href="register.php">Register here</a>
            </p>

            <button type="submit" name="login" class="btn btn-primary w-100 my-2">
                Login
            </button>
        </form>

    </div>

</div>

