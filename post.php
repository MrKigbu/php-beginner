<?php 
session_start();
require "inc/header.php";
require "inc/process.php";
if(isset($_GET["post_id"]) && !empty($_GET["post_id"])){
    $id = $_GET["post_id"];
    //SQL
    $sql = "SELECT * FROM posts WHERE id = '$id'";
    //Query
    $query = mysqli_query($connection, $sql);
    //result
    $result = mysqli_fetch_assoc($query); 
}else{
    header("location: index.php");
  }
?>
<div class="container">
   <?php require './pages/header-home.php';?>
<div class="container-fluid mx-3 my-3">
<div class="row">
    <div class="col-8">
        <div style="background: url('<?php echo $result["thumbnail"]?>');background-position: center;background-size:cover;background-repeat: no-repeat;">
          <div style="background-color: #0000006e; padding: 20px; text-align:center;"><h2 class="text-white"><?php echo $result["title"]  ?></h2>
        </div>
        </div>
        <hr>
        <div class="row bg-primary mb-2  p-2">
          <div class="col-6 text-start text-white" >Date Published: <?php echo date("F j,Y", strtotime($result["timestamp"])) ?></div>
          <div class="col-6 text-end text-white">Category: <?php 
         $cid = $result["category_id"]; 
         $sql2 = "SELECT * FROM category WHERE id = '$cid'";
         $query2 = mysqli_query($connection, $sql2);
          $result2 = mysqli_fetch_assoc($query2);
          echo $result2["name"];        

         ?></div>
        </div>
        
        <div class="text-start "><img style="width: 200px; height: 200px;" src="<?php echo $result["thumbnail"]?>" alt=""></div>
        <div class="content">
          <p>
            <?php echo nl2br($result["content"]) ?>
          </p>
        </div>
    </div>
    <div class="col-4">

        <!-- sidebar -->
        <div class="border p-3">
            <form action="" method="POST">
                <div class="form-group">
                    <h4>Search post<h4>
                    <input type="text" name="search" class="form-control" placeholder="Enter search term" id="">
                </div>
                <button type="submit" class="btn btn-primary mt-2"> search</button>
            </form>
        </div>

        <div class="border p-3 mt-2">
            <h4>Categories</h4>
            <ul>
                <?php
                for ($i=1; $i <=3 ; $i++) { 
                    ?>

                    <li>
                        <a href="#">Links<?php echo $i; ?></a>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </div>
</div>

</div>
<?php require './pages/footer-home.php';?>
</div>
<?php
require "inc/footer.php";

?>
