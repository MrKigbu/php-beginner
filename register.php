<?php 
require "inc/header.php";
require './pages/header-home.php';
include 'inc/process.php';
?>

<div class="container-fluid p-0"> 

    <!-- CAROUSEL -->
    <div id="carouselExampleDark" class="carousel carousel-dark slide carousel-fade custom-carousel" data-bs-ride="carousel">

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

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>

    </div>

    <!-- FLOATING REGISTRATION FORM -->
    <div class="login-floating">
        <form action="" method="POST" class="p-4 bg-white rounded shadow">

            <h4 class="text-center">Register</h4>

            <?php if(isset($error)): ?>
                <div class="alert alert-danger">
                    <strong><?= $error ?></strong>
                </div>
            <?php elseif(isset($success)): ?>
                <div class="alert alert-success">
                    <strong><?= $success ?></strong>
                </div>
            <?php endif; ?>

            <div class="form-group py-1">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter your name">
            </div>

            <div class="form-group py-1">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter your email">
            </div>

            <div class="form-group py-1">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter your password">
            </div>

            <hr>

            <p>If already registered <a href="login.php">Login</a></p>

            <button type="submit" name="register" class="btn btn-primary w-100 my-2">
                Register
            </button>

        </form>
    </div>
</div>

<style>
.carousel-img {
    height: 600px; 
    object-fit: cover;
    width: 100%;
}

.overlay {
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: rgba(0,0,0,0.45);
    z-index: 1;
}

.carousel-caption {
    z-index: 2;
    color: #fff !important;
    text-shadow: 0 2px 4px rgba(0,0,0,0.8);
}

.login-floating {
    position: absolute;
    top: 50%;
    right: 60px;
    transform: translateY(-50%);
    width: 330px;
    z-index: 10;
}

@media (max-width: 768px) {
    .login-floating {
        position: static;
        transform: none;
        width: 100%;
        padding: 10px;
        margin-top: -30px;
    }
}
</style>

<?php require './pages/footer-home.php'; ?>
<?php require "inc/footer.php"; ?>
<!-- PAGE JS -->
