<?php 
//scritps and links 
require './pages/header-home.php';
?>
<div class="container">
<?php
//header content 
require "inc/header.php";
?>
<div class="d-flex aligns-items-center justify-content-center py-3">
    <form action="inc/process.php" method="Post">
        <h4 class="text-center">Register</h4>
        <div class="form-group py-1">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter your name" id="">
        </div>
        <div class="form-group py-1">
            <label for="">Email</label>
            <input type="email" name="email" placeholder="Enter Your Email" class="form-control" id="">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter your password" id="">
        </div>
        <button type="submit" name="register" class="btn btn-primary text-light my-3 ">Register</button>
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
