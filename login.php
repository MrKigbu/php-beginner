<?php 
session_start();
//scritps and links 
require "inc/header.php";

?>
<div class="container">
<?php
//header content 
require './pages/header-home.php';
include 'inc/process.php';
?>
<div class="d-flex aligns-items-center justify-content-center py-3">
    <form action="" method="Post">
        <h4 class="text-center">Login</h4>
        <?php
        if(isset($error)) {
            ?>
            <div class="alert alert-danger">
            <strong><?php echo $error; ?></strong>
        </div>
        <?php
        }elseif(isset($success)){
            ?>
            <div class="alert alert-success">
            <strong><?php echo $success; ?></strong>
        </div>
            <?php

        }
        ?>
                <div class="form-group py-1">
            <label for="">Email</label>
            <input type="email" name="email" placeholder="Enter Your Email" class="form-control" id="">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter your password" id="">
        </div>
        <hr>
        <p>
            New User <a href="register.php">Register here</a>
        </p>
        <button type="submit" name="login" class="btn btn-primary text-light my-3 ">Login</button>
    </form>
</div>



<?php
//footer content
require './pages/footer-home.php';
//footer script links
?>
</div>
<?php
require "inc/footer.php";
?>
