 <nav class="navbar navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand text-primary" href="index.php" >
      <img src="Uploads/sammy.png" alt="" width="30" height="24">
      Sammy Blog
    </a>
    
    <div class="d-flex">
      <?php
      if (isset($_SESSION["user"])) {
        ?>
        <a href="dashboard.php" class="nav-link text-primary"> <?php echo $_SESSION["user"]["name"]; ?> | Dashboard</a>              
        <a href="logout.php" class="nav-link text-danger"> | Logout</a>              
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
<div class="d-flex justify-content-between mb-3">
  <button class="btn btn-primary" onclick="history.back()">Back</button>
  <button class="btn btn-primary" onclick="history.forward()">Next</button>
</div>
