 <nav class="navbar navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand text-primary" href="javascript:history.back()" >
      <img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24">
      Sammy Blog
    </a>
    <div class="d-flex">
      <?php
      if (isset($_SESSION["user"])) {
        ?>
        <a href="dashboard.php" class="nav-link text-primary"> <?php echo $_SESSION["user"]["name"]; ?> | Dashboard</a>              
        <?php
        }else {
        ?>
        <a href="login.php" class="nav-link text-primary">login</a>
        <a href="register.php" class="nav-link text-primary">Register</a>


        <?php
        }
        
        ?>
    </div>
  </div>
</nav>