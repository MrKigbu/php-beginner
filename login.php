<?php 
session_start();
require "inc/header.php";
?>

<?php
require './pages/header-home.php';
include 'inc/process.php';
?>

<!-- FULL-WIDTH CAROUSEL + FLOATING LOGIN -->
<div class="position-relative">

    <!-- FULL-WIDTH CAROUSEL -->
    <div class="swiper mySwiper">
    <div class="swiper-wrapper">

        <div class="swiper-slide">
            <div class="slide-overlay"></div>
            <img src="uploads/dog-4897327_1280.jpg">
            <div class="slide-caption">
                <h2>Welcome Back</h2>
                <p>Sign in to continue your journey.</p>
            </div>
        </div>

        <div class="swiper-slide">
            <div class="slide-overlay"></div>
            <img src="uploads/new-years-eve-1283521_1280.jpg">
            <div class="slide-caption">
                <h2>Grow With Us</h2>
                <p>Access your dashboard and explore more tools.</p>
            </div>
        </div>

        <div class="swiper-slide">
            <div class="slide-overlay"></div>
            <img src="uploads/prayer-1308663_1280.jpg">
            <div class="slide-caption">
                <h2>Stay Connected</h2>
                <p>Engage and share your ideas freely.</p>
            </div>
        </div>

        <!-- add more slides as needed -->

    </div>

    <!-- Navigation arrows -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- Pagination (dots) -->
    <div class="swiper-pagination"></div>
</div>


    <!-- FLOATING LOGIN FORM -->
    <div class="login-floating">
         <form class="p-4 bg-white rounded shadow" action="" method="POST">
>

            <h4 class="text-center mb-3">Login</h4>

            <?php if(isset($error)) { ?>
                <div class="alert alert-danger"><strong><?= $error ?></strong></div>
            <?php } elseif(isset($success)) { ?>
                <div class="alert alert-success"><strong><?= $success ?></strong></div>
            <?php } ?>

            <div class="form-group mb-2">
                <label>Email</label>
                <input type="email" name="email" placeholder="Enter your email" class="form-control">
            </div>

            <div class="form-group mb-2">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter your password" class="form-control">
            </div>

            <button type="submit" name="login" class="btn btn-primary w-100 mt-2">
                Login
            </button>

            <p class="mt-3 text-center">
                New user? <a href="register.php">Register here</a>
            </p>
        </form>
    </div>

</div>

<!-- FOOTER -->
<?php require './pages/footer-home.php'; ?>
<?php require "inc/footer.php"; ?>


<!-- PAGE CSS -->
<style>
    
/* Make swiper span the page */
.mySwiper {
    height: 85vh;
    position: relative;
}

/* Each slide image */
.mySwiper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Dark overlay */
.slide-overlay {
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.45);
    z-index: 1;
}

/* Caption text */
.slide-caption {
    position: absolute;
    z-index: 5;
    color: white;
    bottom: 20%;
    left: 10%;
}

.slide-caption h2,
.slide-caption p {
    text-shadow: 0 2px 5px rgba(0,0,0,0.8);
}

/* Floating Login/Register Form */
.login-floating {
    position: absolute;
    top: 50%;
    right: 50px;
    transform: translateY(-50%);
    width: 330px;
    z-index: 20;
}

/* Mobile fallback */
@media (max-width: 768px) {
    .mySwiper {
        height: 60vh;
    }
    .login-floating {
        position: relative;
        top: auto;
        right: auto;
        transform: none;
        width: 100%;
        margin-top: 10px;
    }
}

</style>
