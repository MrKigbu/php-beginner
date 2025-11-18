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
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="6"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="4000">
                    <img src="https://cdn.pixabay.com/photo/2016/04/05/03/18/prayer-1308663_1280.jpg" class="d-block w-100" style="height: 500px; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Welcome Back</h5>
                        <p>Sign in to continue your journey.</p>
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="4000">
                    <img src="https://cdn.pixabay.com/photo/2015/08/07/08/24/bible-879085_1280.jpg" class="d-block w-100" style="height: 500px; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Grow With Us</h5>
                        <p>Access your dashboard and explore more tools.</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="https://cdn.pixabay.com/photo/2016/04/23/14/08/frog-1347642_1280.jpg" class="d-block w-100" style="height: 500px; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Stay Connected</h5>
                        <p>Engage and share your ideas freely.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <img src="https://www.istockphoto.com/photo/a-woman-using-and-typing-on-laptop-with-blank-white-desktop-screen-gm1160505836-317669361?utm_source=pixabay&utm_medium=affiliate&utm_campaign=sponsored_photo&utm_content=srp_topbanner-popular_media&utm_term=model" class="d-block w-100" style="height: 500px; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Grow With Us</h5>
                        <p>Access your dashboard and explore more tools.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <img src="https://cdn.pixabay.com/photo/2015/11/26/00/14/woman-1063100_1280.jpg" class="d-block w-100" style="height: 500px; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Grow With Us</h5>
                        <p>Access your dashboard and explore more tools.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <img src="https://cdn.pixabay.com/photo/2015/08/07/08/24/bible-879085_1280.jpg" class="d-block w-100" style="height: 500px; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Grow With Us</h5>
                        <p>Access your dashboard and explore more tools.</p>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
             <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
             <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
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

